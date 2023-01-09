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

use Pimcore\Model\DataObject\AccessoryPart\Listing;
use Pimcore\Model\DataObject\Data\Hotspotimage;

class Car extends \Pimcore\Model\DataObject\Car
{
    const OBJECT_TYPE_ACTUAL_CAR = 'actual-car';
    const OBJECT_TYPE_VIRTUAL_CAR = 'virtual-car';

    public function getOSName(): ?string
    {
        return ($this->getManufacturer() ? ($this->getManufacturer()->getName() . ' ') : null) . $this->getName();
    }

    /**
     * @param string|null $language
     * @return string|null
     */
    public function getProductName($language = null)
    {
        return $this->getName($language);
    }

    /**
     * @return string
     */
    public function getSubText(): string
    {
        $textParts = [];

        $textParts[] = $this->getBodyStyle() ? $this->getBodyStyle()->getName() : '';
        $textParts[] = $this->getProductionYear();
        $textParts[] = $this->getAttributes()->getEngine() ? $this->getAttributes()->getEngine()->getPower() : '';

        return "<span class='text-nowrap'>" . implode("</span>, <span class='text-nowrap'>", array_filter($textParts)) . '</span>';
    }

    /**
     * @return string|null
     */
    public function getOSProductNumber(): ?string
    {
        return $this->getId();
    }

    public function getOSIndexType(): string
    {
        return $this->getObjectType() === self::OBJECT_TYPE_ACTUAL_CAR ? self::OBJECT_TYPE_VARIANT : self::OBJECT_TYPE_OBJECT;
    }

    public function getOSParentId(): int
    {
        if ($this->getObjectType() == self::OBJECT_TYPE_ACTUAL_CAR) {
            $parent = $this->getParent();
            while ($parent->getParent() instanceof self) {
                $parent = $parent->getParent();
            }

            return $parent->getId();
        }

        return parent::getOSParentId();
    }

    /**
     * @return Hotspotimage|null
     */
    public function getMainImage(): ?Hotspotimage
    {
        $gallery = $this->getGallery();
        if ($gallery) {
            $items = $gallery->getItems();
            if ($items) {
                return $items[0];
            }
        }

        return null;
    }

    /**
     * @return Hotspotimage[]
     */
    public function getAdditionalImages(): array
    {
        $gallery = $this->getGallery();
        $items = $gallery->getItems();

        if ($items) {
            unset($items[0]);
        } else {
            $items = [];
        }

        $items = array_filter($items, function ($item) {
            return !empty($item) && !empty($item->getImage());
        });

        $generalImages = $this->getGenericImages()->getItems();
        if ($generalImages) {
            $items = array_merge($items, $generalImages);
        }

        return $items;
    }

    /**
     * @return Category|null
     */
    public function getMainCategory(): ?Category
    {
        $categories = $this->getCategories();
        $category = reset($categories);

        return $category ?: null;
    }

    /**
     * @return Listing
     *
     * @throws \Exception
     */
    public function getAccessories(): Listing
    {

        // get all parent IDs
        $filterIds = ['compatibleTo LIKE "%,' . $this->getId() . ',%"'];
        $parent = $this->getParent();
        while ($parent instanceof self) {
            $filterIds[] = 'compatibleTo LIKE "%,' . $parent->getId() . ',%"';
            $parent = $parent->getParent();
        }

        // create listing with OR statements
        $listing = new Listing();
        $listing->setCondition(implode(' OR ', $filterIds));

        return $listing;
    }

    /**
     * @return Car[]
     */
    public function getColorVariants(): array
    {
        if ($this->getObjectType() == self::OBJECT_TYPE_ACTUAL_CAR) {
            $parent = $this->getParent();

            $carSiblings = [];
            foreach ($parent->getChildren() as $sibling) {
                if ($sibling instanceof self && $sibling->getObjectType() == self::OBJECT_TYPE_ACTUAL_CAR) {
                    $carSiblings[] = $sibling;
                }
            }

            return $carSiblings;
        }

        return [];
    }
}
