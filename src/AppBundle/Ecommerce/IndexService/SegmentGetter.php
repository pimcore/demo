<?php


namespace AppBundle\Ecommerce\IndexService;


use AppBundle\Model\Product\AccessoryPart;
use AppBundle\Model\Product\Car;
use CustomerManagementFrameworkBundle\SegmentManager\SegmentManagerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Getter\GetterInterface;

class SegmentGetter implements GetterInterface
{

    const SEGMENT_GROUP_MANUFACTURER = "Interest Manufacturer";
    const SEGMENT_GROUP_CAR_CLASS = "Interest Car Class";
    const SEGMENT_GROUP_BODY_STYLE = "Interest Body Style";


    /**
     * @var SegmentManagerInterface
     */
    protected $segmentManager;

    /**
     * SegmentGetter constructor.
     * @param SegmentManagerInterface $segmentManager
     */
    public function __construct(SegmentManagerInterface $segmentManager)
    {
        $this->segmentManager = $segmentManager;
    }


    public function get($object, $config = null)
    {
        $segments = [];

        if($object instanceof Car) {
            $manufacturer = $object->getManufacturer();
            if($manufacturer) {
                $segments[] = $this->segmentManager->createCalculatedSegment($manufacturer->getKey(), self::SEGMENT_GROUP_MANUFACTURER);
            }

            $carClass = $object->getCarClass();
            if($carClass) {
                $segments[] = $this->segmentManager->createCalculatedSegment($carClass, self::SEGMENT_GROUP_CAR_CLASS);
            }

            $bodyStyle = $object->getBodyStyle();
            if($bodyStyle) {
                $segments[] = $this->segmentManager->createCalculatedSegment($bodyStyle->getKey(), self::SEGMENT_GROUP_BODY_STYLE);
            }
        }

        if($object instanceof AccessoryPart) {
            $manufacturer = $object->getManufacturer();
            if($manufacturer) {
                $segments[] = $this->segmentManager->createCalculatedSegment($manufacturer->getKey(), self::SEGMENT_GROUP_MANUFACTURER);
            }
        }

        return $segments;
    }
}