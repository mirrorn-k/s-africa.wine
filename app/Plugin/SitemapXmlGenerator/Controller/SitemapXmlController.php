<?php
/*
 * Copyright(c) 2020 Okada Masaki All Rights Reserved.
 */
namespace Plugin\SitemapXmlGenerator\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Eccube\Controller\AbstractController;
use Plugin\SitemapXmlGenerator\Service\SitemapXmlService;

/**
 * sitemap.xml画面
 *
 * @author Okada Masaki
 */
class SitemapXmlController extends AbstractController
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
     * sitemap.xml 表示アクション
     *
     * @Route("/sitemap.xml", name="sitemap_xml", defaults={"_format":"xml"}, requirements={"_format":"xml"})
     */
    public function sitemapxml(Request $request)
    {
        // リクエストのlocaleを設定
        $dataForTemplate = $this->sitemapXmlService->getSitemapXmlData();

        // viewをレンダリングしてXMLコンテンツを生成
        $xmlContent = $this->renderView(
            '/SitemapXmlGenerator/Resource/template/sitemapxml.twig',
            [
                'sitemapUrls' => $dataForTemplate['sitemapUrls']
            ]
        );

        // レスポンスを生成
        $response = new Response($xmlContent);

        // Content-Typeを設定
        $response->headers->set('Content-Type', 'application/xml; charset=utf-8');

        // XMLコンテンツを返す
        return $response;
    }
}
