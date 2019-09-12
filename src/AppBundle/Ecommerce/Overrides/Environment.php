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

namespace AppBundle\Ecommerce\Overrides;

/**
 * TODO integrate that implementation into core
 * check if it is a BC break
 */
class Environment extends \Pimcore\Bundle\EcommerceFrameworkBundle\SessionEnvironment
{
    protected $useGuestCart = null;

    /**
     * @return null
     */
    public function getUseGuestCart()
    {
        if (null === $this->useGuestCart) {
            return !$this->hasCurrentUserId();
        }

        return parent::getUseGuestCart();
    }

    public function clearEnvironment()
    {
        parent::clearEnvironment();
        $this->useGuestCart = null;
    }
}
