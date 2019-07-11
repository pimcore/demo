<?php


namespace AppBundle\Model\Product;


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

}