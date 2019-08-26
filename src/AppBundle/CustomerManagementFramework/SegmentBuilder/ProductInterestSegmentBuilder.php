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
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace AppBundle\CustomerManagementFramework\SegmentBuilder;


use AppBundle\Model\Product\AccessoryPart;
use AppBundle\Model\Product\Car;
use AppBundle\Website\Tool\ForceInheritance;
use CustomerManagementFrameworkBundle\Model\CustomerInterface;
use CustomerManagementFrameworkBundle\SegmentBuilder\AbstractSegmentBuilder;
use CustomerManagementFrameworkBundle\SegmentManager\SegmentManagerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder;
use Pimcore\Bundle\EcommerceFrameworkBundle\OrderManager\Order\Listing\Filter\CustomerObject;
use Pimcore\Model\DataObject\OnlineShopOrderItem;

/**
 * Sample Segment Builder that adds segments to customer based on products he ordered
 */
class ProductInterestSegmentBuilder extends AbstractSegmentBuilder
{

    protected $segmentGroupName;

    public function __construct( $segmentGroupName = 'Interests')
    {
        $this->segmentGroupName = $segmentGroupName;
    }


    /**
     * prepares data and configurations which could be reused for all buildSegment(CustomerInterface $customer) calls
     *
     * @param SegmentManagerInterface $segmentManager
     *
     * @return void
     */
    public function prepare(SegmentManagerInterface $segmentManager)
    {
        // nothing to do
    }

    /**
     * update calculated segment(s) for given customer
     *
     * @param CustomerInterface $customer
     * @param SegmentManagerInterface $segmentManager
     *
     * @return void
     */
    public function calculateSegments(CustomerInterface $customer, SegmentManagerInterface $segmentManager)
    {
        $segmentGroupName = $this->segmentGroupName;
        ForceInheritance::run(function() use ($customer, $segmentManager, $segmentGroupName) {
            $orderManager = Factory::getInstance()->getOrderManager();

            // create new order list
            $list = $orderManager->createOrderList();

            // set list type
            $list->setListType($list::LIST_TYPE_ORDER_ITEM);

            // set order state
            $list->setOrderState(AbstractOrder::ORDER_STATE_COMMITTED);
            $list->addFilter( new CustomerObject($customer));

            $interests = [];

            foreach($list as $orderItem) {

                /**
                 * @var $orderItem OnlineShopOrderItem
                 */

                $product = $orderItem->getProduct();
                if($product) {

                    if($product instanceof Car) {

                        if($product->getManufacturer()) {
                            $interests[$product->getManufacturer()->getName('en')]++;
                        }
                        if($product->getBodyStyle()) {
                            $interests[$product->getBodyStyle()->getName('en')]++;
                        }
                        $interests[$product->getCarClass()]++;

                    } else if ($product instanceof AccessoryPart) {

                        if($product->getManufacturer()) {
                            $interests[$product->getManufacturer()->getName('en')]++;
                        }

                    }

                }

            }


            foreach($interests as $interestName => $count) {
                $segment = $segmentManager->createCalculatedSegment(
                    $interestName,
                    $segmentGroupName
                );

                $segmentManager->mergeSegments($customer, [$segment], [],  $this->getName(), null, $count );
            }
        });

    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ProductCategorySegmentBuilder';
    }

    /**
     * @return bool
     */
    public function executeOnCustomerSave()
    {
        //only for demo purposes on true, should be false in production environment
        return true;
    }
}
