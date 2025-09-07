<?php

namespace Plugin\GmoEpsilon4\Form\Type\Admin;

use Eccube\Common\EccubeConfig;
use Plugin\GmoEpsilon4\Entity\Config;
use Plugin\GmoEpsilon4\Util\PaymentUtil;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class ConfigType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * ConfigType constructor.
     *
     * @param EccubeConfig $eccubeConfig
     */
    public function __construct(EccubeConfig $eccubeConfig)
    {
        $this->eccubeConfig = $eccubeConfig;
    }

    /**
     * Build config type form
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     * @return type
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $objUtil = new PaymentUtil($this->eccubeConfig);
        $payments = array_flip($objUtil->getPayments());
        $conveniences = array_flip($objUtil->getConvenienceNames());
        $SslVersions = array_flip($objUtil->getSSLVersions());

        $builder
            ->add('contract_code', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => '※ 契約コードが入力されていません。']),
                    new Assert\Length(['max' => $this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('destination_url', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => '※ 接続先URLが入力されていません。']),
                    new Assert\Length(['max' => $this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('info_conf_url', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => '※ 情報確認URLが入力されていません。']),
                    new Assert\Length(['max' => $this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('ssl_version', ChoiceType::class, [
                    'choices' => $SslVersions,
                    'constraints' => [
                        new Assert\NotBlank(['message' => '※ SSLバージョン選択が選択されていません。']),
                    ],
            		'multiple' => false,
            		'expanded' => false,
            ])

            ->add('use_payment', ChoiceType::class, [
                'choices' => $payments,
                'constraints' => [
                    new Assert\NotBlank(['message' => '※ 利用決済方法が選択されていません。']),
                ],
                'multiple' => true,
                'expanded' => true,
            ])

            ->add('use_convenience', ChoiceType::class, [
                'choices' => $conveniences,
                // 支払方法にコンビニが選択されていて利用コンビニが選択されていなければエラー
                'constraints' => new Assert\Callback(function (
                    $use_convenience = null,
                    ExecutionContextInterface $context
                ) {
                    $use_payment = $context->getRoot()->get('use_payment')->getData();
                    $arrPayment = array_flip($this->eccubeConfig['gmo_epsilon']['pay_id']);
                    foreach ($use_payment as $pay_id) {
                        if ($arrPayment[$pay_id] === 'conveni' && !$use_convenience) {
                            $context->buildViolation('※ 利用コンビニが選択されていません。')
                                ->atPath('use_convenience')
                                ->addViolation();
                        }
                    }
                }),
                'expanded' => true,
                'multiple' => true,
            ])

            ->add('block_mode', ChoiceType::class,[
                'choices' => ['ON' => 1,
                              'OFF' => 0,
                             ],
                'constraints' => [
                    new Assert\NotBlank(['message' => '※ ブロックモードが選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('access_frequency_time', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Callback(function (
                        $objcet,
                        ExecutionContextInterface $context
                    ) {
                        $block_mode = $context->getRoot()->get('block_mode')->getData();
                        if ($block_mode && !$objcet) {
                            $context->buildViolation('※ アクセス頻度が入力されていません。')
                                ->atPath('access_frequency_time')
                                ->addViolation();
                        }
                    }),
                    new Assert\Length(['max' => $this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('access_frequency', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Callback(function (
                        $objcet,
                        ExecutionContextInterface $context
                    ) {
                        $block_mode = $context->getRoot()->get('block_mode')->getData();
                        if ($block_mode && !$objcet) {
                            $context->buildViolation('※ アクセス頻度が入力されていません。')
                                ->atPath('access_frequency')
                                ->addViolation();
                        }
                    }),
                    new Assert\Length(['max' => $this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('block_time', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Callback(function (
                        $objcet,
                        ExecutionContextInterface $context
                    ) {
                        $block_mode = $context->getRoot()->get('block_mode')->getData();
                        if ($block_mode && !$objcet) {
                            $context->buildViolation('※ ブロック時間が入力されていません。')
                                ->atPath('block_time')
                                ->addViolation();
                        }
                    }),
                    new Assert\Length(['max' => $this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('white_list', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Callback(function (
                        $objcet,
                        ExecutionContextInterface $context
                    ) {
                        if ($objcet) {
                            $ipAddresses = explode(',', $objcet);
                            foreach ($ipAddresses as $ip_address) {
                                if (!preg_match('/(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])/', $ip_address)) {
                                    $context->buildViolation('※ IPアドレスの形式が不正です。')
                                        ->atPath('white_list')
                                        ->addViolation();
                                }
                            }
                        }
                    }),
                    new Assert\Length(['max' => $this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Config::class,
        ]);
    }
}
