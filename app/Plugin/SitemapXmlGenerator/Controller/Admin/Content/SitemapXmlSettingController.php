<?php
/*
 * Copyright(c) 2020 Okada Masaki All Rights Reserved.
 */
namespace Plugin\SitemapXmlGenerator\Controller\Admin\Content;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Eccube\Controller\AbstractController;
use Plugin\SitemapXmlGenerator\Entity\SitemapSetting;
use Plugin\SitemapXmlGenerator\Form\Type\Admin\SitemapSettingType;
use Plugin\SitemapXmlGenerator\Service\SitemapXmlService;

/**
 * sitemap.xml管理画面
 *
 * @author Okada Masaki
 */
class SitemapXmlSettingController extends AbstractController
{

    /**
     *
     * @var SitemapXmlService
     */
    protected $sitemapXmlService;

    /**
     * コンストラクタ
     *
     * @param SitemapXmlService $sitemapXmlService
     */
    public function __construct(SitemapXmlService $sitemapXmlService)
    {
        $this->sitemapXmlService = $sitemapXmlService;
    }

    /**
     * 画面 表示アクション
     *
     * @Route("/%eccube_admin_route%/content/sitemapxml/setting", name="admin_content_sitemapxml_setting")
     * @Template("/SitemapXmlGenerator/Resource/template/admin/Content/sitemapxml_setting.twig")
     * @param Request $request
     */
    public function index(Request $request)
    {
        // フォームを取得
        $form = $this->getForm($request);

        return [
            'form' => $form->createView()
        ];
    }

    /**
     * sitemap.xml 出力項目 更新アクション
     *
     * @Route("/%eccube_admin_route%/content/sitemapxml/setting/save", name="admin_content_sitemapxml_setting_save")
     * @param Request $request
     */
    public function save(Request $request)
    {
        // フォームを取得
        $form = $this->getForm($request);

        if (! $form->isSubmitted() || ! $form->isValid()) {
            // 画面表示アクションにリダイレクト
            $this->redirectToRoute('admin_content_sitemapxml_setting');
        }

        // パラメタ取得
        $allParams = $request->request->all();
        $params = $allParams['sitemap_setting'] ?? [];

        // 設定更新
        $this->sitemapXmlService->save($params);

        // 完了メッセージをセット
        $this->addSuccess('admin.common.save_complete', 'admin');

        // 出力項目設定画面 表示アクションにリダイレクト
        return $this->redirectToRoute('admin_content_sitemapxml_setting');
    }

    /**
     * フォームを取得
     *
     * @param Request $request
     * @return \Symfony\Component\Form\FormInterface
     */
    protected function getForm(Request $request)
    {
        // sitemap.xmlの設定をDBから取得
        /** @var SitemapSetting */
        $sitemapSetting = $this->sitemapXmlService->getSitemapSetting();

        /* @var \Symfony\Component\Form\FormFactoryInterface */
        $builder = $this->formFactory->createBuilder(SitemapSettingType::class, $sitemapSetting);

        /* @var \Symfony\Component\Form\FormInterface */
        $form = $builder->getForm();

        $form->handleRequest($request);

        return $form;
    }
}