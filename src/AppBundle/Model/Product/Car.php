<?php


namespace AppBundle\Model\Product;


use Pimcore\Model\DataObject\AccessoryPart\Listing;
use Pimcore\Model\DataObject\Data\Hotspotimage;

class Car extends \Pimcore\Model\DataObject\Car
{
    const OBJECT_TYPE_ACTUAL_CAR = 'actual-car';
    const OBJECT_TYPE_VIRTUAL_CAR = 'virtual-car';

    public function getOSName() {
        return $this->getManufacturer()->getName() . " " . $this->getName();
    }

    public function getOSProductNumber()
    {
        return $this->getId();
    }

    public function getOSIndexType()
    {
        return $this->getObjectType() === self::OBJECT_TYPE_ACTUAL_CAR ? self::OBJECT_TYPE_VARIANT : self::OBJECT_TYPE_OBJECT;
    }

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
        $items = $gallery->getItems();
        if($items) {
            return $items[0];
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

        $generalImages = $this->getGenericImages()->getItems();
        if($generalImages) {
            $items = array_merge($items, $generalImages);
        }

        return $items;
    }
    /**
     * @return Category
     */
    public function getMainCategory() {
        return reset($this->getCategories());
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
        return $this->getParent()->getChildren();
    }

}