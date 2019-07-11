<?php


namespace AppBundle\Ecommerce\Overrides;

/**
 * TODO integrate that implementation into core
 * check if it is a BC break
 */
class Environment extends \Pimcore\Bundle\EcommerceFrameworkBundle\Environment
{

    protected $useGuestCart = null;

    /**
     * @return null
     */
    public function getUseGuestCart()
    {
        if(null === $this->useGuestCart) {
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