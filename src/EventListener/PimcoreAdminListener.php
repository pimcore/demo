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

namespace App\EventListener;

use Pimcore\Bundle\AdminBundle\Event\ElementAdminStyleEvent;
use Pimcore\Event\BundleManager\PathsEvent;

class PimcoreAdminListener
{
    public function addCSSFiles(PathsEvent $event)
    {
        $event->setPaths(
            array_merge(
                $event->getPaths(),
                [
                    '/static/css/admin-style.css'
                ]
            )
        );
    }

    public function addJSFiles(PathsEvent $event)
    {
        $event->setPaths(
            array_merge(
                $event->getPaths(),
                [
                    '/static/js/startup.js'
                ]
            )
        );
    }

    public function onResolveElementAdminStyle(ElementAdminStyleEvent $event)
    {
        $element = $event->getElement();
        // decide which default styles you want to override
        if ($element instanceof \App\Model\Product\Car) {
            $event->setAdminStyle(new \App\Model\Product\AdminStyle\Car($element));
        }
    }
}
