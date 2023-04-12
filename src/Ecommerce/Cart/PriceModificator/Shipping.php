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

namespace App\Ecommerce\Cart\PriceModificator;

use App\Model\Product\AccessoryPart;
use App\Model\Product\Car;
use Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\CartInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\CartPriceModificator;
use Pimcore\Bundle\EcommerceFrameworkBundle\PriceSystem\ModificatedPrice;
use Pimcore\Bundle\EcommerceFrameworkBundle\PriceSystem\ModificatedPriceInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\PriceSystem\PriceInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\PriceSystem\TaxManagement\TaxEntry;
use Pimcore\Bundle\EcommerceFrameworkBundle\Type\Decimal;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Shipping extends CartPriceModificator\Shipping
{
    /**
     * @var Decimal
     */
    protected $baseCharge;

    /**
     * @var Decimal
     */
    protected $carCharge;

    protected function processOptions(array $options): void
    {
        $this->baseCharge = Decimal::create($options['baseCharge']);
        $this->carCharge = Decimal::create($options['carCharge']);
    }

    protected function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'baseCharge' => 10,
            'carCharge' => 200,
        ]);
    }

    public function getName(): string
    {
        return 'Shipping';
    }

    /**
     * function which modifies the current sub total price
     *
     * @param PriceInterface $currentSubTotal - current sub total which is modified and returned
     * @param CartInterface $cart - cart
     */
    public function modify(PriceInterface $currentSubTotal, CartInterface $cart): ModificatedPrice|ModificatedPriceInterface
    {
        $carCount = 0;
        $hasAccessories = false;

        foreach ($cart->getItems() as $cartItem) {
            if ($cartItem->getProduct() instanceof Car) {
                $carCount += $cartItem->getCount();
            }
            if ($cartItem->getProduct() instanceof AccessoryPart) {
                $hasAccessories = true;
            }
        }

        $shippingCost = Decimal::zero();
        if ($hasAccessories) {
            $shippingCost = $shippingCost->add($this->baseCharge);
        }

        $shippingCost = $shippingCost->add($this->carCharge->mul($carCount));

        $modifiedPrice = new ModificatedPrice($shippingCost, $currentSubTotal->getCurrency());
        $taxClass = $this->getTaxClass();
        if ($taxClass) {
            $modifiedPrice->setTaxEntryCombinationMode($taxClass->getTaxEntryCombinationType());
            $modifiedPrice->setTaxEntries(TaxEntry::convertTaxEntries($taxClass));

            $modifiedPrice->setGrossAmount($shippingCost, true);
        }

        return $modifiedPrice;
    }

    /**
     * @return $this
     */
    public function setCharge(Decimal $charge): static
    {
        if ($charge->isZero()) {
            $this->baseCharge = Decimal::zero();
            $this->carCharge = Decimal::zero();
        }

        return $this;
    }
}
