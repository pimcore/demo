<?php


namespace AppBundle\Model\Product;


use Pimcore\Model\DataObject\AccessoryPart\Listing;
use Pimcore\Model\DataObject\Data\Hotspotimage;

class Car extends \Pimcore\Model\DataObject\Car
{
    const OBJECT_TYPE_ACTUAL_CAR = 'actual-car';
    const OBJECT_TYPE_VIRTUAL_CAR = 'virtual-car';

    /**
     * @return string
     */
    public function getOSName() {
        return ($this->getManufacturer() ? $this->getManufacturer()->getName() . " " : "") . $this->getName();
    }

    /**
     * @return string
     */
    public function getSubText(): string {
        $textParts = [];

        $textParts[] = $this->getBodyStyle() ? $this->getBodyStyle()->getName() : '';
        $textParts[] = $this->getProductionYear();
        $textParts[] = $this->getAttributes()->getEngine() ? $this->getAttributes()->getEngine()->getPower() : '';

        return "<span class='text-nowrap'>" . implode("</span>, <span class='text-nowrap'>" , array_filter($textParts)) . "</span>";
    }

    /**
     * @return int|string
     */
    public function getOSProductNumber()
    {
        return $this->getId();
    }

    /**
     * @return string
     */
    public function getOSIndexType()
    {
        return $this->getObjectType() === self::OBJECT_TYPE_ACTUAL_CAR ? self::OBJECT_TYPE_VARIANT : self::OBJECT_TYPE_OBJECT;
    }

    /**
     * @return int
     */
    public function getOSParentId()
    {
        if($this->getObjectType() == self::OBJECT_TYPE_ACTUAL_CAR) {
            $parent = $this->getParent();
            while($parent->getParent() instanceof Car) {
                $parent = $parent->getParent();
            }
            return $parent->getId();
        }
        return parent::getOSParentId();
    }

    /**
     * @return Hotspotimage|null
     */
    public function getMainImage() : ?Hotspotimage {

        $gallery = $this->getGallery();
        if($gallery) {
            $items = $gallery->getItems();
            if($items) {
                return $items[0];
            }
        }
        return null;
    }

    /**
     * @return Hotspotimage[]
     */
    public function getAdditionalImages(): array {
        $gallery = $this->getGallery();
        $items = $gallery->getItems();

        if($items) {
            unset($items[0]);
        } else {
            $items = [];
        }

        $items = array_filter($items, function($item) {
             return !empty($item) &&  !empty($item->getImage());
        });

        $generalImages = $this->getGenericImages()->getItems();
        if($generalImages) {
            $items = array_merge($items, $generalImages);
        }

        return $items;
    }

    /**
     * @return Category|null
     */
    public function getMainCategory(): ?Category {
        $category = reset($this->getCategories());
        return $category ?: null;
    }

    /**
     * @return Listing
     * @throws \Exception
     */
    public function getAccessories(): Listing {

        // get all parent IDs
        $filterIds = ['compatibleTo LIKE "%,' . $this->getId() . ',%"'];
        $parent = $this->getParent();
        while($parent instanceof Car) {
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
    public function getColorVariants(): array {
        if($this->getObjectType() == self::OBJECT_TYPE_ACTUAL_CAR) {
            $parent = $this->getParent();

            $carSiblings = [];
            foreach($parent->getChildren() as $sibling) {
                if($sibling instanceof Car && $sibling->getObjectType() == self::OBJECT_TYPE_ACTUAL_CAR) {
                    $carSiblings[] = $sibling;
                }
            }

            return $carSiblings;

        }

        return [];
    }


    public function getElementAdminStyle()
    {
        if (empty($this->o_elementAdminStyle)) {
            $this->o_elementAdminStyle = new AdminStyle\Car($this);
        }

        return $this->o_elementAdminStyle;
    }

}