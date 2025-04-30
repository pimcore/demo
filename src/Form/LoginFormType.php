<?php
/**
* This source file is available under the terms of the
* Pimcore Open Core License (POCL)
* Full copyright and license information is available in
* LICENSE.md which is distributed with this source code.
*
*  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.com)
*  @license    Pimcore Open Core License (POCL)
*/

declare(strict_types=1);

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

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;

class LoginFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('_username', EmailType::class, [
                'label' => 'user.email',
                'label_attr' => [
                    'class' => 'sr-only'
                ]
            ])
            ->add('_password', PasswordType::class, [
                'label' => 'user.password',
                'label_attr' => [
                    'class' => 'sr-only'
                ],
                'attr' => [
                    'maxlength' => PasswordHasherInterface::MAX_PASSWORD_LENGTH
                ]
            ])
            ->add('_target_path', HiddenType::class)
            ->add('_submit', SubmitType::class, [
                'label' => 'general.login'
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
