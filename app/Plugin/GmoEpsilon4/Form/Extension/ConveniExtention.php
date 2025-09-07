<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\GmoEpsilon4\Form\Extension;

use Eccube\Entity\Order;
use Eccube\Form\Type\Shopping\OrderType;
use Eccube\Repository\PaymentRepository;
use Plugin\GmoEpsilon4\Service\Method\Conveni;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints\NotBlank;
use Eccube\Common\EccubeConfig;
use Plugin\GmoEpsilon4\Repository\ConfigRepository;

/**
 * 注文手続き画面のFormを拡張し、カード入力フォームを追加する.
 * 支払い方法に応じてエクステンションを作成する.
 */
class ConveniExtention extends AbstractTypeExtension
{
    /**
     * @var PaymentRepository
     */
    protected $paymentRepository;
    protected $eccubeConfig;
    protected $gmoConfigRepository;

    public function __construct(
            EccubeConfig $eccubeConfig,
            PaymentRepository $paymentRepository,
            ConfigRepository $gmoConfigRepository
    )
    {
        $this->paymentRepository = $paymentRepository;
        $this->eccubeConfig = $eccubeConfig;
        $this->gmoConfigRepository = $gmoConfigRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $self = $this;

        $builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) use ($self) {
            /** @var Order $data */
            $data = $event->getData();
            $form = $event->getForm();

            if($data->getPayment()) {

                // 支払い方法が一致する場合
                if (strpos(Conveni::class, $data->getPayment()->getMethodClass()) !== false) {

                    $gmoConfig = $self->gmoConfigRepository->get();
                    // [11,31,32...]
                    $useConveniences = unserialize($gmoConfig->getUseConvenience());
                    // [11 => 0, 31 => 1, 32 => 2...]
                    $useConveniences = array_flip($useConveniences);

                    // ['セブンイレブン' => 11, 'ローソン' => 31...]
                    foreach ($self->eccubeConfig['gmo_epsilon']['conveni_id'] as $conveni_name => $conveni_id) {
                        if (isset($useConveniences[$conveni_id])) {
                            $conveni_name_jp = $self->eccubeConfig['gmo_epsilon']['conveni_name'][$conveni_name];
                            $arrConveniences[$conveni_name_jp] = $conveni_id;
                        }
                    }

                    $message = trans('gmo_epsilon.admin.config.required');

                    if (empty($arrConveniences)) {
                        $message = trans('gmo_epsilon.front.shopping.use_conveni_not_fount');
                    }

                    $form->add('convenience', ChoiceType::class, [
                        'choices' => $arrConveniences,
                        'expanded' => true,
                        'multiple' => false,
                        'placeholder' => false,
                        'constraints' => [
                            new NotBlank(['message' => $message]),
                        ],
                        'invalid_message' => $message,
                        'mapped' => false,
                    ]);
                }
            }
        });

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $options = $event->getForm()->getConfig()->getOptions();

            // 注文確認->注文処理時はフォームは定義されない.
            if ($options['skip_add_form']) {
                // $event->getData()ではなく、$event->getForm()->getData()でOrderエンティティを取得できる
                /** @var Order $Order */
                // $Order = $event->getForm()->getData();
                return;
            } else {
                $Payment = $this->paymentRepository->findOneBy(['method_class' => Conveni::class]);
                $data = $event->getData();
                $form = $event->getForm();
                // 支払い方法が一致しなければremove
                if (is_null($Payment) || $Payment->getId() != $data['Payment']) {
                    $form->remove('convenience');
                }
            }
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return OrderType::class;
    }
}
