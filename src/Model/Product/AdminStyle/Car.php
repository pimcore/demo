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

namespace App\Model\Product\AdminStyle;

use Pimcore\Model\Element\AdminStyle;
use Pimcore\Model\Element\ElementInterface;
use Pimcore\Model\DataObject;

class Car extends AdminStyle
{
    /** @var ElementInterface */
    protected $element;

    public function __construct($element)
    {
        parent::__construct($element);

        $this->element = $element;

        if ($element instanceof \App\Model\Product\Car) {
            DataObject\Service::useInheritedValues(true, function () use ($element) {
                if ($element->getObjectType() == 'actual-car') {
                    $this->elementIcon = '/bundles/pimcoreadmin/img/twemoji/1f697.svg';
                }
            });
        }
    }
}
