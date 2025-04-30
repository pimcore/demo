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

namespace App\Ecommerce\IndexService\Config;

use App\Model\Product\AccessoryPart;
use App\Model\Product\Car;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Config\DefaultMysql;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\IndexableInterface;

class MySqlConfig extends DefaultMysql
{
    public function getTablename(): string
    {
        return 'shop_productindex';
    }

    public function getRelationTablename(): string
    {
        return 'shop_productindex_relations';
    }

    public function inIndex(IndexableInterface $object): bool
    {
        return $object instanceof Car || $object instanceof AccessoryPart;
    }
}
