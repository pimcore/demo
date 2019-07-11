<?php


namespace AppBundle\Model\Product;

use Pimcore\Model\DataObject\Data\Hotspotimage;

class AccessoryPart extends \Pimcore\Model\DataObject\AccessoryPart
{

    public function getOSName() {

        $name =
            $this->getManufacturer()->getName() . " " .
            $this->getSeries()->getName() . " " .
            $this->getMainCategory()->getName() . " " .
            $this->getNameAddition();

        return $name;
    }

    public function getOSProductNumber()
    {
        return $this->getId();
    }

    public function getOSIndexType()
    {
        return self::OBJECT_TYPE_VARIANT;
    }

    /**
     * @return Hotspotimage|null
     */
    public function getMainImage() : ?Hotspotimage {
        return $this->getImage();
    }

    /**
     * @return array
     */
    public function getCategories() {
        return [$this->getMainCategory()];
    }

}