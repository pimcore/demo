<?php


namespace AppBundle\Ecommerce\IndexService\Config;


use AppBundle\Model\Product\AccessoryPart;
use AppBundle\Model\Product\Car;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Config\DefaultMysql;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\IndexableInterface;

class MySqlConfig extends DefaultMysql
{

    public function getTablename()
    {
        return "shop_productindex";
    }

    public function getRelationTablename()
    {
        return "shop_productindex_relations";
    }

    public function inIndex(IndexableInterface $object)
    {
        return $object instanceof Car || $object instanceof AccessoryPart;
    }

}