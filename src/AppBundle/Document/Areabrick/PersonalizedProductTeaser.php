<?php


namespace AppBundle\Document\Areabrick;


use AppBundle\Ecommerce\IndexService\SegmentGetter;
use CustomerManagementFrameworkBundle\SegmentManager\SegmentManagerInterface;
use CustomerManagementFrameworkBundle\Targeting\SegmentTracker;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
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

        if(! $this->visitorInfoStorage->hasVisitorInfo()) {
            return;
        }

        $allowedSegmentGroups = [SegmentGetter::SEGMENT_GROUP_CAR_CLASS, SegmentGetter::SEGMENT_GROUP_MANUFACTURER];
        $trackedSegments = $this->segmentTracker->getAssignments($this->visitorInfoStorage->getVisitorInfo());

        //get relevant segments for filtering
        $segmentCollection = [];
        foreach($trackedSegments as $segmentId => $count) {
            $segment = $this->segmentManager->getSegmentById($segmentId);
            $reference = $segment->getGroup()->getReference();
            if(in_array($reference, $allowedSegmentGroups)) {
                $segmentCollection[$reference][] = [
                    'segment' => $segment,
                    'count' => $count
                ];
            }
        }

        if(!$segmentCollection) {
            return;
        }

        //order segments by count, pick 2 top segments
        foreach($allowedSegmentGroups as $group) {
            $groupCollection = $segmentCollection[$group];
            if($groupCollection) {

                usort($groupCollection, function($left, $right) {
                    if($left['count'] === $right['count']) {
                        return 0;
                    }
                    return ($left['count'] < $right['count']) ? 1 : -1;
                });

                $segmentCollection[$group] = array_slice($groupCollection, 0, 2);
            }
        }

        //build filter list
        $productList = $this->ecommerceFactory->getIndexService()->getProductListForCurrentTenant();
        foreach($allowedSegmentGroups as $group) {

            $groupCollection = $segmentCollection[$group];
            if($groupCollection) {

                $values = [];
                foreach($groupCollection as $item) {
                    $values[] = intval($item['segment']->getId());
                }

                $productList->addRelationCondition('segments', 'dest IN (' . implode(',', $values) . ')');

            }

        }

        $productList->setOrderKey('RAND()');
        $productList->setLimit(3);
        $productList->setVariantMode(ProductListInterface::VARIANT_MODE_VARIANTS_ONLY);

        if($productList->count() >= 3) {
            $info->getView()->productList = $productList;
            $info->getView()->usePersonalizedData = true;
        }

    }
}