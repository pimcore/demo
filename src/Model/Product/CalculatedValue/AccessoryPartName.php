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
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace App\Model\Product\CalculatedValue;

use App\Model\Product\AccessoryPart;
use Pimcore\Model\DataObject\ClassDefinition\CalculatorClassInterface;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Data\CalculatedValue;

class AccessoryPartName implements CalculatorClassInterface
{
    public function compute(Concrete $object, CalculatedValue $context): string
    {
        return $this->getCalculatedValueForEditMode($object, $context);
    }

    /**
     * @param $object
     * @param $context CalculatedValue
     *
     * @return string
     */
    public function getCalculatedValueForEditMode(Concrete $object, CalculatedValue $context): string
    {
        if ($object instanceof AccessoryPart) {
            $language = $context->getPosition();

            return DataObject\Service::useInheritedValues(true, function () use ($object, $language) {
                return
                    ($object->getManufacturer() ? ($object->getManufacturer()->getName($language) . ' ') : '') .
                    ($object->getSeries() ? ($object->getSeries()->getName($language) . ' ') : '') .
                    ($object->getMainCategory() ? ($object->getMainCategory()->getName($language) . ' ') : '') .
                    $object->getNameAddition($language)
                ;
            });
        }

        return '';
    }
}
