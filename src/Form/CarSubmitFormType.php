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

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace App\Form;

use Pimcore\Model\DataObject\BodyStyle;
use Pimcore\Model\DataObject\Manufacturer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CarSubmitFormType extends AbstractType
{
    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $manufacturers = new Manufacturer\Listing();
        $manufacturerChoices = [];
        foreach ($manufacturers as $manufacturer) {
            $manufacturerChoices[$manufacturer->getName()] = $manufacturer->getId();
        }
        ksort($manufacturerChoices);

        $bodyStyles = new BodyStyle\Listing();
        $bodyStyleChoices = [];
        foreach ($bodyStyles as $bodyStyle) {
            $bodyStyleChoices[$bodyStyle->getName()] = $bodyStyle->getId();
        }
        ksort($bodyStyleChoices);

        $builder
            ->add('name', TextType::class, [
                'label' => 'general.name',
                'required' => true
            ])
            ->add('description', TextareaType::class, [
                'label' => 'general.description',
                'required' => false
            ])
            ->add('manufacturer', ChoiceType::class, [
                'label' => 'general.manufacturer',
                'required' => true,
                'choices' => $manufacturerChoices
            ])
            ->add('bodyStyle', ChoiceType::class, [
                'label' => 'general.body-style',
                'required' => true,
                'choices' => $bodyStyleChoices
            ])
            ->add('carClass', ChoiceType::class, [
                'label' => 'general.car-class',
                'required' => true,
                'choices' => [
                    'Full-size luxury car' => 'Full-size luxury car',
                    'Grand tourer' => 'Grand tourer',
                    'Light commercial vehicle' => 'Light commercial vehicle',
                    'Muscle Car' => 'Muscle Car',
                    'City Car' => 'City Car',
                    'Executive car' => 'Executive car',
                    'Economy car' => 'Economy car',
                    'Personal luxury car' => 'Personal luxury car',
                    'Full-Size' => 'Full-Size',
                    'Family car' => 'Family car',
                    'Mid-size luxury' => 'Mid-size luxury',
                    'sports car' => 'sports car'
                ]
            ]);

        $builder
            ->add('_submit', SubmitType::class, [
                'label' => 'general.submit',
                'attr' => [
                    'class' => 'btn btn-block btn-success'
                ]
            ]);
    }
}
