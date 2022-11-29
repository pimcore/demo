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

namespace App\Ecommerce\IndexService\Config;

use App\Model\Product\AccessoryPart;
use App\Model\Product\Car;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Config\DefaultMysql;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\IndexableInterface;

class MySqlConfig extends DefaultMysql
{
    /**
     * @return string
     */
    public function getTablename(): string
    {
        return 'shop_productindex';
    }

    /**
     * @return string
     */
    public function getRelationTablename(): string
    {
        return 'shop_productindex_relations';
    }

    /**
     * @param IndexableInterface $object
     * @return bool
     */
    public function inIndex(IndexableInterface $object): bool
    {
        return $object instanceof Car || $object instanceof AccessoryPart;
    }
}
