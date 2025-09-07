<?php
/*
 * Copyright(c) 2020 Okada Masaki All Rights Reserved.
 */

namespace Plugin\SitemapXmlGenerator\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Eccube\Entity\Page;
use Eccube\Entity\Master\ProductStatus;
use Eccube\Entity\Category;
use Eccube\Entity\Product;
use Eccube\Repository\CategoryRepository;
use Eccube\Repository\PageRepository;
use Eccube\Repository\ProductRepository;
use Eccube\Util\StringUtil;
use Plugin\SitemapXmlGenerator\Repository\SitemapXmlRepository;
use Plugin\SitemapXmlGenerator\Entity\SitemapSetting;
use Plugin\SitemapXmlGenerator\ValueObject\SitemapUrl;

/**
 * SitemapXmlService
 *
 * @author Okada Masaki
 */
class SitemapXmlService
{

    /**
     *
     * @var SitemapXmlRepository
     */
    protected $sitemapXmlRepository;

    /**
     *
     * @var PageRepository
     */
    protected $pageRepository;

    /**
     *
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     *
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     *
     * @var UrlGeneratorInterface
     */
    protected $router;

    /**
     * ベースディレクトリまでのサイトのURL
     *
     * @var string
     */
    protected $siteUrl;

    /**
     * 除外ディレクトリ
     *
     * @var array
     */
    protected $ignoreDirectories;

    /**
     * SitemapUrlの配列
     *
     * @var array
     */
    protected $sitemapUrls;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * コンストラクタ
     *
     * @param SitemapXmlRepository $sitemapXmlRepository
     * @param PageRepository $pageRepository
     * @param CategoryRepository $categoryRepository
     * @param ProductRepository $productRepository
     * @param UrlGeneratorInterface $router
     * @param LoggerInterface $logger
     */
    public function __construct(
        SitemapXmlRepository $sitemapXmlRepository,
        PageRepository $pageRepository,
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository,
        UrlGeneratorInterface $router,
        LoggerInterface $logger
    ) {
        $this->sitemapXmlRepository = $sitemapXmlRepository;
        $this->pageRepository = $pageRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->router = $router;
        $this->logger = $logger;

        $this->sitemapUrls = [];
        $this->siteUrl = null;
        $this->ignoreDirectories = null;
    }

    /**
     * SitemapSettingエンティティを返却する
     *
     * @return SitemapSetting
     */
    public function getSitemapSetting()
    {
        // 設定を取得
        $sitemapSetting = $this->sitemapXmlRepository->findBy([], null, 1);

        // 存在する場合はエンティティを返却
        if (! is_null($sitemapSetting) && ! empty($sitemapSetting)) {
            return $sitemapSetting[0];
        }

        // 存在しない場合は、デフォルトの設定値を返却
        return $this->getDefaultSitemapSetting();
    }

    /**
     * 初期値を返却
     *
     * @return SitemapSetting
     */
    public function getDefaultSitemapSetting()
    {
        $sitemapSetting = new SitemapSetting();
        $sitemapSetting->setLastmodAvailed(false);
        $sitemapSetting->setChangefreq(0);
        $sitemapSetting->setPriorityAvailed(false);
        $sitemapSetting->setExcludedDirectories('complete,guide,nonmember,product_review');
        $sitemapSetting->setDiscriminatorType('sitemap_setting');

        return $sitemapSetting;
    }

    /**
     * 登録処理
     *
     * @param array $params
     * @return void
     */
    public function save($params)
    {
        $sitemapSetting = $this->sitemapXmlRepository->findBy([], null, 1);

        if (is_null($sitemapSetting) || empty($sitemapSetting)) {
            $sitemapSetting = new SitemapSetting();
        } else {
            $sitemapSetting = $sitemapSetting[0];
        }

        $sitemapSetting->setLastmodAvailed($params['lastmodAvailed']);
        $sitemapSetting->setChangefreq($params['changefreq']);
        $sitemapSetting->setPriorityAvailed($params['priorityAvailed']);
        $sitemapSetting->setExcludedDirectories($params['excludedDirectories']);
        $sitemapSetting->setDiscriminatorType('sitemap_setting');
        $this->sitemapXmlRepository->save($sitemapSetting);
        $this->sitemapXmlRepository->flush($sitemapSetting);
    }

    /**
     * sitemap.xml用のデータを組み立てる。
     *
     * @return array
     */
    public function getSitemapXmlData()
    {
        // DBから設定を取得する
        $sitemapSetting = $this->getSitemapSetting();

        // ページを取得
        $where = '(p.meta_robots <> :meta_robots OR p.meta_robots IS NULL)';
        $pages = $this->pageRepository->getPageList($where, [
            'meta_robots' => 'noindex'
        ]);

        // カテゴリを取得
        $categories = $this->categoryRepository->getList(null, true);

        // 商品を取得
        $products = $this->productRepository->findBy([
            'Status' => ProductStatus::DISPLAY_SHOW
        ], [
            'update_date' => 'DESC'
        ]);

        // 戻り値を組み立てる
        $result = $this->buildSitemapXmlData($sitemapSetting, $pages, $categories, $products);

        return $result;
    }

    /**
     * 戻り値組み立て
     *
     * @param SitemapSetting $sitemapSetting
     * @param array $pages
     * @param array $categories
     * @param array $products
     * @return array('sitemapUrls' => array of SitemapUrl objects) 返却される配列の形式
     */
    protected function buildSitemapXmlData(
        SitemapSetting $sitemapSetting,
        array $pages,
        array $categories,
        array $products
    ) {
        // 戻り値初期化
        $this->sitemapUrls = [];

        // 戻り値用の配列にページのURLをセット
        // サイトURLを取得
        $siteUrl = $this->getSiteUrl();

        // 除外ディレクトリリスト
        $ignoreDirectories = $this->getIgnoreDirectories($sitemapSetting);

        // 各ページのURLをセットする
        /** @var Page $page */
        foreach ($pages as $page) {

            $sitemapUrl = new SitemapUrl();
            $pageUrl = $page->getUrl();

            // 本会員登録(完了ページ)は、パラメタにsecret_keyが必要な為、除外する。
            if (strcmp('entry_activate', $pageUrl) === 0) {
                continue;
            }

            $slug = null;
            try {
                // スラッグ取得
                $slug = $this->router->generate($pageUrl);

                if ($this->isExistIgnoreDirectory($slug, $ignoreDirectories)) {
                    // 除外ディレクトリに一致する場合はスキップ
                    continue;
                }

                // 全ての項目をセット
                $sitemapUrl->setSitemapUrl($sitemapSetting, $siteUrl . $slug, $page->getUpdateDate(), $pageUrl);

                // URLを配列に追加
                array_push($this->sitemapUrls, $sitemapUrl);
            } catch (MissingMandatoryParametersException $e) {
                // パラメータが不足している場合は、スキップして次のページへ
                $this->logger->info(sprintf('[SitemapXmlGenerator] Missing parameter for route "%s" - %s', $pageUrl, $e->getMessage()));
                continue;
            } catch (\Exception $e) {
                // その他の例外はログに記録し、スキップ
                $this->logger->error(sprintf('SitemapXmlGenerator: Missing parameter for route "%s" - %s', $pageUrl, $e->getMessage()));
                continue;
            }
        }

        if (! $this->isExistIgnoreDirectory($this->router->generate('product_list', ['category_id' => 0]), $ignoreDirectories)) {
            $this->setSitemapUrlForCategories($sitemapSetting, $categories);
        }

        if (! $this->isExistIgnoreDirectory($this->router->generate('product_detail', ['id' => 0]), $ignoreDirectories)) {
            $this->setSitemapUrlForProducts($sitemapSetting, $products);
        }

        return [
            'sitemapUrls' => $this->sitemapUrls
        ];
    }

    /**
     * 商品一覧のURLをセット
     *
     * @param SitemapSetting $sitemapSetting
     * @param array $categories 商品のカテゴリの配列
     */
    protected function setSitemapUrlForCategories(SitemapSetting $sitemapSetting, array $categories)
    {
        // サイトURLを取得
        $siteUrl = $this->getSiteUrl();

        $pageUrl = 'product_list';

        /** @var Category $category */
        foreach ($categories as $category) {
            $sitemapUrl = new SitemapUrl();

            $slug = $this->router->generate($pageUrl, [
                'category_id' => $category->getId()
            ]);

            // 全ての項目をセット
            $sitemapUrl->setSitemapUrl($sitemapSetting, $siteUrl . $slug, $category->getUpdateDate(), $pageUrl);

            array_push($this->sitemapUrls, $sitemapUrl);
        }
    }

    /**
     * 商品詳細のURLをセット
     *
     * @param SitemapSetting $sitemapSetting
     * @param array $products 商品の配列
     */
    protected function setSitemapUrlForProducts(SitemapSetting $sitemapSetting, array $products)
    {
        // サイトURLを取得
        $siteUrl = $this->getSiteUrl();

        $pageUrl = 'product_detail';

        /** @var Product $product */
        foreach ($products as $product) {
            $sitemapUrl = new SitemapUrl();

            $slug = $this->router->generate($pageUrl, [
                'id' => $product->getId()
            ]);

            // 全ての項目をセット
            $sitemapUrl->setSitemapUrl($sitemapSetting, $siteUrl . $slug, $product->getUpdateDate(), $pageUrl);

            array_push($this->sitemapUrls, $sitemapUrl);
        }
    }

    /**
     * スラッグに無視するディレクトリ含まれているか調べる
     *
     * @param string $slug
     * @param array $ignoreDirectories
     * @return boolean
     */
    protected function isExistIgnoreDirectory($slug, array $ignoreDirectories)
    {
        if (! is_string($slug) || empty($ignoreDirectories)) {
            return false;
        }

        foreach ($ignoreDirectories as $ignoreDirectory) {
            $trimmedDirectory = trim($ignoreDirectory);
            if (strpos($slug, $trimmedDirectory) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * サイトのURLを組み立てて返却
     *
     * @return string
     */
    protected function getSiteUrl()
    {
        if (! empty($this->siteUrl)) {
            return $this->siteUrl;
        }

        $context = $this->router->getContext();

        $siteUrl = $context->getScheme() . '://';

        $siteUrl .= $context->getHost();

        // ポートベースのバーチャルホストで開発や運用している場合、ポート番号を付ける
        if (strcmp('https', $context->getScheme()) === 0) {
            if (443 != $context->getHttpsPort()) {
                $siteUrl .= ':' . $context->getHttpsPort();
            }
        } else {
            if (80 != $context->getHttpPort()) {
                $siteUrl .= ':' . $context->getHttpPort();
            }
        }

        if (StringUtil::isNotBlank($context->getBaseUrl())) {
            $siteUrl .= $context->getBaseUrl();
        }

        $this->siteUrl = $siteUrl;

        return $this->siteUrl;
    }

    /**
     * 除外ディレクトリ
     *
     * @param SitemapSetting $sitemapSetting
     * @return array
     */
    protected function getIgnoreDirectories(SitemapSetting $sitemapSetting)
    {
        if (is_null($this->ignoreDirectories) && ! is_array($this->ignoreDirectories)) {
            // 除外ディレクトリ
            $ignoreDirectories = $sitemapSetting->getExcludedDirectories();
            if (StringUtil::isNotBlank($ignoreDirectories)) {
                $this->ignoreDirectories = explode(',', $ignoreDirectories);
            } else {
                $this->ignoreDirectories = array();
            }
        }

        return $this->ignoreDirectories;
    }
}
