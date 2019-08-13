<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

declare(strict_types=1);

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormType extends AbstractType
{
    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'E-Mail',
                'required' => true
            ])
            ->add('firstname', TextType::class, [
                'label' => 'First Name',
                'required' => true
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Last Name',
                'required' => true
            ]);
        if(!$options['hidePassword']) {
            $builder->add('password', PasswordType::class, [
                'label' => 'Password'
            ]);
        }
        $builder
            ->add('oAuthKey', HiddenType::class)
            ->add('_submit', SubmitType::class, [
                'label' => 'Register',
                'attr' => [
                    'class' => 'btn btn-lg btn-block btn-success'
                ]
            ]);
    }

    /**
     * @inheritDoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefined('hidePassword');
    }
}
