<?php


namespace AppBundle\Website\Tool;


use Pimcore\Model\DataObject\AbstractObject;

class ForceInheritance
{

    public static function run($callable) {
        $inheritanceBackup = AbstractObject::getGetInheritedValues();
        AbstractObject::setGetInheritedValues(true);
        $result = $callable();
        AbstractObject::setGetInheritedValues($inheritanceBackup);
        return $result;
    }

}