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

namespace App\Model\Product;

use Pimcore\Model\DataObject\Car\Listing;
use Pimcore\Model\DataObject\Data\Hotspotimage;

class AccessoryPart extends \Pimcore\Model\DataObject\AccessoryPart
{
    /**
     * @return string
     */
    public function getOSName(): ?string
    {
        return $this->getGeneratedName();
    }

    public function getProductName($language = null)
    {
        return
            ($this->getSeries() ? ($this->getSeries()->getName() . ' ') : '') .
            ($this->getMainCategory() ? ($this->getMainCategory()->getName($language) . ' ') : '') .
            $this->getNameAddition($language)
            ;
    }

    /**
     * @return int|string
     */
    public function getOSProductNumber(): ?string
    {
        return $this->getErpNumber();
    }

    public function getOSIndexType(): string
    {
        return self::OBJECT_TYPE_VARIANT;
    }

    /**
     * @return Hotspotimage|null
     */
    public function getMainImage(): ?Hotspotimage
    {
        return $this->getImage();
    }

    /**
     * @return Category[]
     */
    public function getCategories(): array
    {
        $category = $this->getMainCategory();

        return $category ? [$category] : [];
    }

    /**
     * @return int[]
     *
     * @throws \Exception
     */
    public function getCompatibleToProductIds()
    {
        $paths = [];
        foreach ($this->getCompatibleTo() as $compatible) {
            $paths[] = 'path LIKE "' . $compatible->getFullPath() . '%"';
        }

        $listing = new Listing();
        $listing->setCondition(implode(' OR ', $paths));

        return $listing->loadIdList();
    }
}
