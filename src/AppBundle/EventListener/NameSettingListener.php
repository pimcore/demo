<?php


namespace AppBundle\EventListener;


use AppBundle\Model\Product\Category;
use Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Model\DataObject\BodyStyle;
use Pimcore\Model\DataObject\Manufacturer;

class NameSettingListener
{

    public function onPreAdd(DataObjectEvent $event) {

        $object = $event->getObject();

        if($object instanceof BodyStyle || $object instanceof Category || $object instanceof Manufacturer) {
            $object->setName($object->getKey());
        }

    }

}