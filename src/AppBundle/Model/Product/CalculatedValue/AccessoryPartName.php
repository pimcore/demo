<?php


namespace AppBundle\Model\Product\CalculatedValue;


use AppBundle\Model\Product\AccessoryPart;
use AppBundle\Website\Tool\ForceInheritance;

class AccessoryPartName
{

    public static function compute($object, $context) {

        if($object instanceof AccessoryPart) {
            $language = $context->getPosition();

            return ForceInheritance::run(function() use ($object, $language) {
                return
                    ($object->getManufacturer() ? ($object->getManufacturer()->getName($language) . " ") : "") .
                    ($object->getSeries() ? ($object->getSeries()->getName($language) . " ") : "") .
                    ($object->getMainCategory() ? ($object->getMainCategory()->getName($language) . " ") : "") .
                    $object->getNameAddition($language)
                ;
            });

        }

        return '';

    }

}