<?php

namespace Plugin\TaxManagement\Form\Type\Admin;

use Plugin\TaxManagement\Entity\Config;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;


class ConfigType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('discount_rate_flag', ChoiceType::class, [
                'label' => '割引率表示',
                'required' => true,
                'choices'  => [
                    '非表示' => false,
                    '表示' => true,
                ],
                'expanded' => true,
            ])
            ->add('include_tax_flag', ChoiceType::class, [
                'label' => '税表示',
                'required' => true,
                'choices'  => [
                    '税抜き' => false,
                    '税込み' => true,
                ],
                'expanded' => true,
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Config::class,
        ]);
    }
}
