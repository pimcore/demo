<?php


namespace AppBundle\Model;


use CustomerManagementFrameworkBundle\Model\SsoAwareCustomerInterface;

class Customer extends \Pimcore\Model\DataObject\Customer implements SsoAwareCustomerInterface
{

}