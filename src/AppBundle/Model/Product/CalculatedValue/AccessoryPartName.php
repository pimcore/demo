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

namespace AppBundle\Model\Product\CalculatedValue;

use AppBundle\Model\Product\AccessoryPart;
use AppBundle\Website\Tool\ForceInheritance;

class AccessoryPartName
{
    public static function compute($object, $context)
    {
        if ($object instanceof AccessoryPart) {
            $language = $context->getPosition();

            return ForceInheritance::run(function () use ($object, $language) {
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
