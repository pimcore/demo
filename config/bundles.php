<?php

use CustomerManagementFrameworkBundle\PimcoreCustomerManagementFrameworkBundle;
use OutputDataConfigToolkitBundle\OutputDataConfigToolkitBundle;
use Pimcore\Bundle\DataHubBundle\PimcoreDataHubBundle;
use Pimcore\Bundle\EcommerceFrameworkBundle\PimcoreEcommerceFrameworkBundle;
use Pimcore\Bundle\EcommerceFrameworkBundle\PimcorePaymentProviderPayPalSmartPaymentButtonBundle;
use Pimcore\Bundle\ObjectMergerBundle\ObjectMergerBundle;
use Web2PrintToolsBundle\Web2PrintToolsBundle;

return [
    //Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
    PimcoreEcommerceFrameworkBundle::class => ['all' => true],
    PimcoreCustomerManagementFrameworkBundle::class => ['all' => true],
    PimcorePaymentProviderPayPalSmartPaymentButtonBundle::class => ['all' => true],
    OutputDataConfigToolkitBundle::class => ['all' => true],
    Web2PrintToolsBundle::class => ['all' => true],
    PimcoreDataHubBundle::class => ['all' => true],
    ObjectMergerBundle::class => ['all' => true],
];
