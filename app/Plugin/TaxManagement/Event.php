<?php

namespace Plugin\TaxManagement;

use Eccube\Application;
use Eccube\Entity\Product;
use Eccube\Event\TemplateEvent;
use Eccube\Event\EventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Plugin\TaxManagement\Repository\ConfigRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class Event implements EventSubscriberInterface
{
	private $container;

	/**
     * @var ConfigRepository
     */
	 protected $configRepository;
	
	const DETAIL_PRICE_TAG = "<span class=\"ec-price__tax\">{{ '税込'|trans }}</span>";
	
	const LIST_PRICE_TAG = "{{ Product.getPrice02IncTaxMin|price }}";
	


	/**
	 * SynchronizeReviewDataEvent constructor.
	 *
	 * @param ContainerInterface $container
	 */
	public function __construct(
        ContainerInterface $container,
        ConfigRepository $configRepository,
		Application $app)
	{
        $this->container = $container;
        $this->configRepository = $configRepository;
		$this->app = $app;
		
	}
	
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            //'front.product.detail.initialize' => 'onFrontProductDetailInitialize',
            'Product/detail.twig' => 'onProductDetailTwig',
			'Product/list.twig' => 'onProductListTwig',
            //'admin.product.delete.complete' => 'onAdminDeleteProductComplete',
        ];
    }
	
	/**
	 * 商品詳細ページ　割引率の表示
	 * @param TemplateEvent $event
	 */
    public function onProductDetailTwig(TemplateEvent $event)
    {
        $parameters = $event->getParameters();
		
		if (is_null($parameters['Product'])) {
			return;
		}

		$Product = $parameters['Product'];
		$TaxManagementConfig = $this->configRepository->get();
		if($TaxManagementConfig !== null) {
			$parameters['TaxManagementConfig'] = $TaxManagementConfig;
		
			$source = $event->getSource();
			$twig = $this->container->get('twig');
			$snipet_review = $twig->getLoader()->getSourceContext('TaxManagement/Resource/template/default/Product/detail_discount_rate.twig');

			
			$search1   = '/{# 通常価格 #}[\s\S]+?{# 商品コード #}/s';
			preg_match($search1, $source, $matches);
			if($matches) {
				$newHtml  = $snipet_review->getCode();
				$source = preg_replace($search1, $newHtml, $source);
			}

			$discountRates = $this->calculateDiscountRates($Product, $TaxManagementConfig->isDiscountRateFlag());
			$Product->discountRatesJson = json_encode($discountRates['class_categories']);
			$Product->discountRateMax = $discountRates['discountRateMax'];
			$Product->discountRateMin = $discountRates['discountRateMin'];

			$parameters['Product']   = $Product;
			$event->setParameters($parameters);

			$event->addSnippet('@TaxManagement/default/Product/detail_discount_rate_script.twig');
			$event->setSource($source);
		}
		
    }
	
	public function onProductListTwig(TemplateEvent $event)
    {
        $parameters = $event->getParameters();
        if (is_null($parameters['pagination'])){
            return;
        }
		$pagination = $parameters['pagination'];
		$TaxManagementConfig = $this->configRepository->get();

		if($TaxManagementConfig !== null) {
			$parameters['TaxManagementConfig'] = $TaxManagementConfig;

			
			foreach ($pagination as $Product) {
				// 01:通常価格, 02:販売価格
				$discountRates = $this->calculateDiscountRates($Product, $TaxManagementConfig->isDiscountRateFlag());
				$Product->discountRatesJson = json_encode($discountRates['class_categories']);
				$Product->discountRateMax = $discountRates['discountRateMax'];
				$Product->discountRateMin = $discountRates['discountRateMin'];
			}

			//set parameter for twig files
			$parameters['pagination']   = $pagination;
			$event->setParameters($parameters);
			
			// load product list twig template
			$source = $event->getSource();
			$twig = $this->container->get('twig');
			$snipet_review = $twig->getLoader()->getSourceContext('TaxManagement/Resource/template/default/Product/list_discount_rate.twig');

			$search   = '<p class="price02-default"';
			if($replaced_str_pos1 = strpos($source, $search)) {
				$replace =  $search . 'style="display:inline-block;"' ;
				$source = substr_replace ($source, $replace, $replaced_str_pos1, strlen($search));
			}

			$search1   = '/({{ Product\.getPrice02IncTaxMin\|price }}\n\s*{% endif %}\n\s*<\/p>)/s';
			preg_match($search1, $source, $matches);
			if($matches) {
				$newHtml  = '$1'.$snipet_review->getCode();
				$source = preg_replace($search1, $newHtml, $source);
			}


			if($TaxManagementConfig->isIncludeTaxFlag() !== null and $TaxManagementConfig->isIncludeTaxFlag() == false) {
				$search2   = 'Product.getPrice02IncTaxMin';
				$replace2  = 'Product.getPrice02Min';
				$search3   = 'Product.getPrice02IncTaxMax';
				$replace3  = 'Product.getPrice02Max';
				$source = str_replace($search2, $replace2, $source);
				$source = str_replace($search3, $replace3, $source);
			}

			$event->addSnippet('@TaxManagement/default/Product/list_discount_rate_script.twig');

			$event->setSource($source);
		}
		
	}
	
	/**
	 * calculate discount rate max and discount rate min
	 * they will be a number in range (1,99) or null 
	 *
	 * @param Eccube\Entity\Product $Product
	 * @param bool $discountRateFlag
	 * @return array()
	 * 
	 */
	private function calculateDiscountRates($Product, $discountRateFlag) {
		
		$class_categories = [
            '__unselected' => [
                '__unselected' => [
                    'name' => trans('common.select'),
                    'product_class_id' => '',
                ],
            ],
		];

		$minDiscountRate = 0; 
		$maxDiscountRate = 0;
		
        foreach ($Product->getProductClasses() as $ProductClass) {
            /** @var ProductClass $ProductClass */
            if (!$ProductClass->isVisible()) {
                continue;
			}
            /* @var $ProductClass \Eccube\Entity\ProductClass */
            $ClassCategory1 = $ProductClass->getClassCategory1();
            $ClassCategory2 = $ProductClass->getClassCategory2();
            if ($ClassCategory2 && !$ClassCategory2->isVisible()) {
                continue;
			}

			$price01 = $ProductClass->getPrice01();
			$price02 = $ProductClass->getPrice02();
			$discountRate = 0;
			if ((int)$price01 > 0 ) {

				$rate = sprintf('%.3f', (1.0 - ($price02 / $price01)) * 100.0);
				$discountRate = (int)ceil($rate);
				
				if ($discountRate <= 0 or $discountRate >= 100 or !$discountRateFlag) {
					$discountRate = 0;
				}

				if($discountRate <= $minDiscountRate || $minDiscountRate == 0) {
					$minDiscountRate = $discountRate;
				}

				if($discountRate >= $maxDiscountRate || $maxDiscountRate == 0) {
					$maxDiscountRate = $discountRate;
				}
			}

            $class_category_id1 = $ClassCategory1 ? (string) $ClassCategory1->getId() : '__unselected2';
            $class_category_id2 = $ClassCategory2 ? (string) $ClassCategory2->getId() : '';

            $class_categories[$class_category_id1]['#'] = array(
				'classcategory_id2' => '',
                'name' => trans('common.select'),
                'product_class_id' => '',
			);
            $class_categories[$class_category_id1]['#'.$class_category_id2] = array(
				'classcategory_id2' => $class_category_id2,
				'discount_rate' => $discountRate
			);
		}
		
		$result = array(
			'class_categories' => $class_categories,
			'discountRateMax' => $maxDiscountRate,
			'discountRateMin' => $minDiscountRate,
		);
		
		return $result;
	}
}
