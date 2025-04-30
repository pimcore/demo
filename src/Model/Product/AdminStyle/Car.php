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

namespace App\Model\Product\AdminStyle;

use Pimcore\Model\DataObject;
use Pimcore\Model\Element\AdminStyle;
use Pimcore\Model\Element\ElementInterface;

class Car extends AdminStyle
{
    protected ElementInterface $element;

    public function __construct(ElementInterface $element)
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
