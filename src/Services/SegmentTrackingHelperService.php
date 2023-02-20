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

namespace App\Services;

use App\Ecommerce\IndexService\SegmentGetter;
use App\Model\Product\AbstractProduct;
use App\Model\Product\Category;
use CustomerManagementFrameworkBundle\SegmentManager\SegmentManagerInterface;
use CustomerManagementFrameworkBundle\Targeting\SegmentTracker;
use Pimcore\Bundle\PersonalizationBundle\Targeting\VisitorInfoStorage;

class SegmentTrackingHelperService
{
    /**
     * @var VisitorInfoStorage
     */
    protected $visitorInfoStorage;

    /**
     * @var SegmentTracker
     */
    protected $segmentTracker;

    /**
     * @var SegmentGetter
     */
    protected $segmentGetter;

    /**
     * @var SegmentManagerInterface
     */
    protected $segmentManager;

    /**
     * SegmentTrackingHelperService constructor.
     *
     * @param VisitorInfoStorage $visitorInfoStorage
     * @param SegmentTracker $segmentTracker
     * @param SegmentGetter $segmentGetter
     * @param SegmentManagerInterface $segmentManager
     */
    public function __construct(VisitorInfoStorage $visitorInfoStorage, SegmentTracker $segmentTracker, SegmentGetter $segmentGetter, SegmentManagerInterface $segmentManager)
    {
        $this->visitorInfoStorage = $visitorInfoStorage;
        $this->segmentTracker = $segmentTracker;
        $this->segmentGetter = $segmentGetter;
        $this->segmentManager = $segmentManager;
    }

    /**
     * @param AbstractProduct $product
     */
    public function trackSegmentsForProduct(AbstractProduct $product)
    {
        if ($this->visitorInfoStorage->hasVisitorInfo()) {
            $segments = $this->segmentGetter->get($product);
            if ($segments) {
                $this->segmentTracker->trackSegments($this->visitorInfoStorage->getVisitorInfo(), $segments);
            }
        }
    }

    /**
     * @param Category $category
     */
    public function trackSegmentsForCategory(Category $category)
    {
        if ($this->visitorInfoStorage->hasVisitorInfo()) {
            $segments = $this->segmentManager->getSegmentsForElement($category);
            if ($segments) {
                $this->segmentTracker->trackSegments($this->visitorInfoStorage->getVisitorInfo(), $segments);
            }
        }
    }
}
