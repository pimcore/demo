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

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject\AccessoryPart;
use Pimcore\Model\DataObject\Data\Geopoint;
use Pimcore\Model\DataObject\Data\QuantityValue;
use Pimcore\Model\DataObject\Objectbrick\Data\SaleInformation;
use Pimcore\Model\DataObject\QuantityValue\Unit;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DataCommand extends AbstractCommand
{
    protected $priceRange = [
        'from' => 57,
        'to' => 900
     ];

    protected $availabilityTypes = [
        'couple-weeks',
        'couple-days',
        'instant'
    ];

    protected $conditionTypes = [
        'broken',
        'reworked',
        'used',
        'new' //not for cars
    ];

    protected $locations = [
        [47.8156617813774, 13.049333095550539],
        [48.197161014477935, 16.335082054138187],
        [48.143553854307555, 11.556630134582521],
        [52.526039219655445, 13.367292881011963],
        [48.78339883980666, 9.180042743682863]
    ];

    public function configure()
    {
        $this->setName('app:data-command');
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $listing = new AccessoryPart\Listing();
        foreach ($listing as $object) {
            $this->updateAccessoryERPInformation($object);
            $object->save();
        }

//        $listing = new Car\Listing();
//        $listing->setCondition('o_id NOT IN (SELECT o_parentId FROM object_CAR)');

//        foreach($listing as $object) {
//
//            $output->writeln("processing element " . $object->getId());
//
//            $saleInformation = $object->getSaleInformation()->getSaleInformation();
//
//            if(empty($saleInformation)) {
//                $saleInformation = new SaleInformation($object);
//                $object->getSaleInformation()->setSaleInformation($saleInformation);
//            }
//
//            $saleInformation->setAvailabilityPieces(rand(1, 5));
//            $saleInformation->setAvailabilityType($this->availabilityTypes[rand(0,2)]);
//            $saleInformation->setCondition($this->conditionTypes[rand(0,2)]);
//            $saleInformation->setPriceInEUR($this->generateCarPrice($saleInformation->getCondition()));
//            $saleInformation->setMilage(new QuantityValue(rand(30000, 300000), Unit::getByAbbreviation('km')));
//
//            $geoPoint = $this->locations[rand(0,4)];
//
//            $object->setLocation(new Geopoint($geoPoint[1], $geoPoint[0]));
//
//            $object->setObjectType('actual-car');
//
//
//            $object->save();
//        }

        $output->writeln('done');

        return 0;
    }

    protected function updateAccessoryKey(AccessoryPart $object)
    {
        $key = '';

        $key .= $object->getManufacturer()->getName() . '-';
        $key .= $object->getSeries()->getName() . '-';
        $key .= $object->getMainCategory()->getName();
        if ($object->getNameAddition()) {
            $key .= '-' . $object->getNameAddition();
        }
        $key = strtolower($key);
        $object->setKey($key);
    }

    protected function updateAccessorySalesInformation(AccessoryPart $object)
    {
        $saleInformation = $object->getSaleInformation()->getSaleInformation();

        if (empty($saleInformation)) {
            $saleInformation = new SaleInformation($object);
            $object->getSaleInformation()->setSaleInformation($saleInformation);
        }
        $saleInformation->setAvailabilityPieces(rand(1, 20));
        $saleInformation->setAvailabilityType($this->availabilityTypes[rand(0, 2)]);
        $saleInformation->setCondition($this->conditionTypes[rand(0, 3)]);
        $saleInformation->setPriceInEUR($this->generatePrice(30, 2000));
        $saleInformation->setMilage(new QuantityValue(rand(30000, 300000), Unit::getByAbbreviation('km')));
    }

    protected function updateAccessoryERPInformation(AccessoryPart $part)
    {
        if (empty($part->getErpNumber())) {
            $part->setErpNumber(crc32($part->getId()));
        }
        $part->setCategoryCode($part->getMainCategory()->getId());

        $owners = [
            'RO',
            'TU',
            'RA',
            'XE',
            'PI'
        ];
        $part->setOwner($owners[rand(0, count($owners) - 1)]);
    }

    /**
     * @param int $min
     * @param int $max
     * @return float
     */
    protected function generatePrice($min, $max)
    {
        $price = rand($min, $max);

        $price = intval($price / 100);
        $price = $price * 100 + 95.95;

        return $price;
    }

    /**
     * @param string $condition
     * @return float
     */
    protected function generateCarPrice($condition)
    {
        $priceRangeArray = [
            'broken' => [1500, 7500],
            'reworked' => [8000, 90000],
            'used' => [6000, 30000],
        ];

        return $this->generatePrice($priceRangeArray[$condition][0], $priceRangeArray[$condition][1]);
    }
}
