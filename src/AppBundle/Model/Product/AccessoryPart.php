<?php


namespace AppBundle\Model\Product;

use Pimcore\Model\DataObject\Car\Listing;
use Pimcore\Model\DataObject\Data\Hotspotimage;

class AccessoryPart extends \Pimcore\Model\DataObject\AccessoryPart
{

    /**
     * @return string
     */
    public function getOSName() {
        return $this->getGeneratedName();
    }

    /**
     * @return int|string
     */
    public function getOSProductNumber()
    {
        return $this->getErpNumber();
    }

    /**
     * @return string
     */
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
     * @return Category[]
     */
    public function getCategories() {
        return [$this->getMainCategory()];
    }

    /**
     * @return int[]
     * @throws \Exception
     */
    public function getCompatibleToProductIds() {

        $paths = [];
        foreach($this->getCompatibleTo() as $compatible) {
            $paths[] = 'o_path LIKE "' . $compatible->getFullPath() . '%"';
        }

        $listing = new Listing();
        $listing->setCondition(implode(' OR ', $paths));

        return $listing->loadIdList();
    }
}