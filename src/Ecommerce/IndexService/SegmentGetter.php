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

namespace App\Ecommerce\IndexService;

use App\Model\Product\AccessoryPart;
use App\Model\Product\Car;
use CustomerManagementFrameworkBundle\SegmentManager\SegmentManagerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Getter\GetterInterface;

class SegmentGetter implements GetterInterface
{
    const SEGMENT_GROUP_MANUFACTURER = 'Interest Manufacturer';
    const SEGMENT_GROUP_CAR_CLASS = 'Interest Car Class';
    const SEGMENT_GROUP_BODY_STYLE = 'Interest Body Style';

    /**
     * @var SegmentManagerInterface
     */
    protected $segmentManager;

    /**
     * SegmentGetter constructor.
     *
     * @param SegmentManagerInterface $segmentManager
     */
    public function __construct(SegmentManagerInterface $segmentManager)
    {
        $this->segmentManager = $segmentManager;
    }

    /**
     * {@inheritdoc}
     */
    public function get($object, ?array $config = null): mixed
    {
        $segments = [];

        if ($object instanceof Car) {
            $manufacturer = $object->getManufacturer();
            if ($manufacturer) {
                $segments[] = $this->segmentManager->createCalculatedSegment($manufacturer->getKey(), self::SEGMENT_GROUP_MANUFACTURER);
            }

            $carClass = $object->getCarClass();
            if ($carClass) {
                $segments[] = $this->segmentManager->createCalculatedSegment($carClass, self::SEGMENT_GROUP_CAR_CLASS);
            }

            $bodyStyle = $object->getBodyStyle();
            if ($bodyStyle) {
                $segments[] = $this->segmentManager->createCalculatedSegment($bodyStyle->getKey(), self::SEGMENT_GROUP_BODY_STYLE);
            }
        }

        if ($object instanceof AccessoryPart) {
            $manufacturer = $object->getManufacturer();
            if ($manufacturer) {
                $segments[] = $this->segmentManager->createCalculatedSegment($manufacturer->getKey(), self::SEGMENT_GROUP_MANUFACTURER);
            }
        }

        return $segments;
    }
}
