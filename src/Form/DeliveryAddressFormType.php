<?php

/**
 * This source file is available under the terms of the
 * Pimcore Open Core License (POCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (https://www.pimcore.com)
 *  @license    Pimcore Open Core License (POCL)
 */

namespace App\Form;

use Pimcore\Localization\LocaleServiceInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeliveryAddressFormType extends AbstractType
{
    public function __construct(protected LocaleServiceInterface $locale)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $regionArray = $this->locale->getDisplayRegions();

        $builder
            ->add('email', EmailType::class, [
                'label' => 'general.email'
            ])
            ->add('firstname', TextType::class, [
                'label' => 'general.firstname'
            ])
            ->add('lastname', TextType::class, [
                'label' => 'general.lastname'
            ])
            ->add('company', TextType::class, [
                'label' => 'general.company',
                'required' => false
            ])
            ->add('street', TextType::class, [
                'label' => 'general.street'
            ])
            ->add('zip', TextType::class, [
                'label' => 'general.zip'

            ])
            ->add('city', TextType::class, [
                'label' => 'general.city'
            ])
            ->add('countryCode', ChoiceType::class, [
                'label' => 'general.country',
                'choices' => [
                    strtoupper($regionArray['AT']) => 'AT',
                    strtoupper($regionArray['DE']) => 'DE'
                ],
                'choice_translation_domain' => false
            ])
            ->add('terms', CheckboxType::class, [
                'label' => 'checkout.terms'
            ])

            ->add('_submit', SubmitType::class, [
                'label' => 'checkout.submit-address'
            ]);
    }

    public function getBlockPrefix(): string
    {
        // we need to set this to an empty string as we want _username as input name
        // instead of login_form[_username] to work with the form authenticator out
        // of the box
        return '';
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
    }
}
