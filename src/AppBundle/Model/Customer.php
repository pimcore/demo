<?php


namespace AppBundle\Model;


use AppBundle\Model\CustomerManagementFramework\PasswordRecoveryInterface;
use CustomerManagementFrameworkBundle\Model\SsoAwareCustomerInterface;

class Customer extends \Pimcore\Model\DataObject\Customer implements SsoAwareCustomerInterface, PasswordRecoveryInterface
{

    /**
     * @return bool
     */
    public function getProfilingConsent()
    {
        return $this->getProfiling() ? $this->getProfiling()->getConsent() : false;
    }

}