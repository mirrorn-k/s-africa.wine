<?php
/*
 * Copyright(c) 2015 GMO Payment Gateway, Inc. All rights reserved.
 * http://www.gmo-pg.com/
 */

namespace Plugin\GmoEpsilon4\Form\Type;

use Eccube\Common\EccubeConfig;
use Eccube\Repository\OrderRepository;
use Eccube\Service\CartService;
use Plugin\GmoEpsilon4\Entity\Config;
use Plugin\GmoEpsilon4\Util\PaymentUtil;
use Plugin\GmoEpsilon4\Repository\ConfigRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert;

class ConvenienceType extends AbstractType {
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * @var CartService
     */
    protected $cartService;

    /**
     * @var ConfigRepository
     */
    protected $configRepository;

    public function __construct(
        EccubeConfig $eccubeConfig,
        ConfigRepository $configRepository,
        OrderRepository $orderRepository,
        CartService $cartService
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->configRepository = $configRepository;
        $this->orderRepository = $orderRepository;
        $this->cartService = $cartService;
    }

    /**
     * Build payment type form
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     * @return type
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $Config = $this->configRepository->get();
        $objUtil = new PaymentUtil($this->eccubeConfig);

        $Order = $this->orderRepository->findOneBy([
            'pre_order_id' => $this->cartService->getPreOrderId()
        ]);

        // コンビニ名を全て取得
        $arrConveniences = $objUtil->getConvenienceNames();

        // 設定されているコンビニのみを抽出
        $arrUseConveniences = [];
        $arrUseConveniIds = unserialize($Config->getUseConvenience());
        foreach ($arrUseConveniIds as $id) {
            if (isset($arrConveniences[$id])) {
                $arrUseConveniences[$id] = $arrConveniences[$id];
            }
        }

        $builder
            ->add('convenience', ChoiceType::class, [
                'label' => 'コンビニ選択',
                'choices' => $arrUseConveniences,
                'multiple' => false,
                'expanded' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => '※ コンビニ選択が選択されていません。']),
                ],
            ])
        ;
    }

}
