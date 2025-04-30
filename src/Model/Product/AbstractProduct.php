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

namespace App\Model\Product;

use Pimcore\Model\DataObject\Data\Hotspotimage;

abstract class AbstractProduct extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractProduct
{
    public function getMainImage(): ?Hotspotimage
    {
        return null;
    }

    public function isActive(bool $inProductList = false): bool
    {
        return $this->isPublished();
    }

    public function getPriceSystemName(): string
    {
        return 'default';
    }

    public function getPrice(): ?string
    {
        $saleInformationBrick = $this->getSaleInformation();
        $saleInformation = $saleInformationBrick->getSaleInformation();
        if ($saleInformation) {
            return $saleInformation->getPriceInEUR();
        }

        return null;
    }
}
