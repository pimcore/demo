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

namespace AppBundle\Ecommerce\IndexService\Config;

use AppBundle\Model\Product\AccessoryPart;
use AppBundle\Model\Product\Car;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Config\DefaultMysql;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\IndexableInterface;

class MySqlConfig extends DefaultMysql
{
    public function getTablename()
    {
        return 'shop_productindex';
    }

    public function getRelationTablename()
    {
        return 'shop_productindex_relations';
    }

    public function inIndex(IndexableInterface $object)
    {
        return $object instanceof Car || $object instanceof AccessoryPart;
    }
}
