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

namespace AppBundle\Model\Product;

use Pimcore\Model\DataObject\Data\Hotspotimage;

abstract class AbstractProduct extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractProduct
{
    /**
     * @return Hotspotimage|null
     */
    public function getMainImage(): ?Hotspotimage
    {
        return null;
    }

    public function isActive($inProductList = false)
    {
        return $this->isPublished();
    }

    public function getPriceSystemName()
    {
        return 'default';
    }

    /**
     * @return |null
     */
    public function getPrice()
    {
        $saleInformationBrick = $this->getSaleInformation();
        $saleInformation = $saleInformationBrick->getSaleInformation();
        if ($saleInformation) {
            return $saleInformation->getPriceInEUR();
        }

        return null;
    }
}
