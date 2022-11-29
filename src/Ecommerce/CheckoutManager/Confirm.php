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

namespace App\Ecommerce\CheckoutManager;

use Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\AbstractStep;
use Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\CheckoutStepInterface;

class Confirm extends AbstractStep implements CheckoutStepInterface
{
    /**
     * namespace key
     */
    const PRIVATE_NAMESPACE = 'confirm';

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return 'confirm';
    }

    /**
     * @inheritdoc
     */
    public function commit($data): bool
    {
        $this->cart->setCheckoutData(self::PRIVATE_NAMESPACE, json_encode($data));

        return true;
    }

    /**
     * @inheritdoc
     */
    public function getData(): mixed
    {
        $data = json_decode((string) $this->cart->getCheckoutData(self::PRIVATE_NAMESPACE));

        return $data;
    }
}
