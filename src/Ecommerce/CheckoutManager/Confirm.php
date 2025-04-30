<?php

/**
 * This source file is available under the terms of the
 * Pimcore Open Core License (POCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (https://www.pimcore.com)
 *  @license    Pimcore Open Core License (POCL)
 */

namespace App\Ecommerce\CheckoutManager;

use Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\AbstractStep;
use Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\CheckoutStepInterface;

class Confirm extends AbstractStep implements CheckoutStepInterface
{
    /**
     * namespace key
     */
    const PRIVATE_NAMESPACE = 'confirm';

    public function getName(): string
    {
        return 'confirm';
    }

    public function commit($data): bool
    {
        $this->cart->setCheckoutData(self::PRIVATE_NAMESPACE, json_encode($data));

        return true;
    }

    public function getData(): mixed
    {
        $data = json_decode((string) $this->cart->getCheckoutData(self::PRIVATE_NAMESPACE));

        return $data;
    }
}
