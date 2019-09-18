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

namespace AppBundle\Document\Areabrick;

use AppBundle\Ecommerce\IndexService\SegmentGetter;
use CustomerManagementFrameworkBundle\SegmentManager\SegmentManagerInterface;
use CustomerManagementFrameworkBundle\Targeting\SegmentTracker;
use Pimcore\Bundle\EcommerceFrameworkBundle\Exception\InvalidConfigException;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\DefaultMysql;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ElasticSearch\AbstractElasticSearch;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ProductListInterface;
use Pimcore\Model\Document\Tag\Area\Info;
use Pimcore\Targeting\VisitorInfoStorage;

class PersonalizedProductTeaser extends AbstractAreabrick
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
     * @var SegmentManagerInterface
     */
    protected $segmentManager;

    /**
     * @var Factory
     */
    protected $ecommerceFactory;

    /**
     * PersonalizedProductTeaser constructor.
     *
     * @param VisitorInfoStorage $visitorInfoStorage
     * @param SegmentTracker $segmentTracker
     * @param SegmentManagerInterface $segmentManager
     * @param Factory $ecommerceFactory
     */
    public function __construct(VisitorInfoStorage $visitorInfoStorage, SegmentTracker $segmentTracker, SegmentManagerInterface $segmentManager, Factory $ecommerceFactory)
    {
        $this->visitorInfoStorage = $visitorInfoStorage;
        $this->segmentTracker = $segmentTracker;
        $this->segmentManager = $segmentManager;
        $this->ecommerceFactory = $ecommerceFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Personalized Product Teaser';
    }

    public function action(Info $info)
    {
        $info->getView()->usePersonalizedData = false;

        if (! $this->visitorInfoStorage->hasVisitorInfo()) {
            return;
        }

        //get relevant segments for filtering
        $allowedSegmentGroups = [SegmentGetter::SEGMENT_GROUP_CAR_CLASS, SegmentGetter::SEGMENT_GROUP_MANUFACTURER];
        $segmentCollection = $this->segmentTracker->getFilteredAssignments($this->visitorInfoStorage->getVisitorInfo(), $allowedSegmentGroups, 2);

        if(empty($segmentCollection)) {
            return;
        }

        //build filter list
        $productList = $this->ecommerceFactory->getIndexService()->getProductListForCurrentTenant();
        foreach ($segmentCollection as $group => $groupCollection) {
            if (!empty($groupCollection)) {
                $values = [];
                foreach ($groupCollection as $item) {
                    $values[] = intval($item['segment']->getId());
                }

                $this->addRelationCondition($productList, $values);

            }
        }

        $this->setRandOrderKey($productList);
        $productList->setLimit(3);
        $productList->setVariantMode(ProductListInterface::VARIANT_MODE_VARIANTS_ONLY);

        if ($productList->count() >= 3) {
            $info->getView()->productList = $productList;
            $info->getView()->usePersonalizedData = true;
        }
    }

    protected function addRelationCondition(ProductListInterface $productList, $values) {

        if($productList instanceof DefaultMysql) {
            $productList->addRelationCondition('segments', 'dest IN (' . implode(',', $values) . ')');
        } else if($productList instanceof AbstractElasticSearch) {
            $productList->addRelationCondition('segments', ['terms' => ['relations.' . 'segments' => $values]]);
        } else {
            throw new InvalidConfigException("Product List Type not supported");
        }

    }

    protected function setRandOrderKey(ProductListInterface $productList) {

        if($productList instanceof DefaultMysql) {
            $productList->setOrderKey('RAND()');
        } else if($productList instanceof AbstractElasticSearch) {
            //not possible
        } else {
            throw new InvalidConfigException("Product List Type not supported");
        }

    }
}
