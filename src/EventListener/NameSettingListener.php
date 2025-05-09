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

namespace App\EventListener;

use App\Model\Product\Category;
use Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Model\DataObject\BodyStyle;
use Pimcore\Model\DataObject\Manufacturer;

class NameSettingListener
{
    public function onPreAdd(DataObjectEvent $event): void
    {
        $object = $event->getObject();

        if ($object instanceof BodyStyle || $object instanceof Category || $object instanceof Manufacturer) {
            $object->setName($object->getKey());
        }
    }
}
