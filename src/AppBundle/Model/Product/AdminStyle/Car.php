<?php


namespace AppBundle\Model\Product\AdminStyle;


use AppBundle\Website\Tool\ForceInheritance;
use Pimcore\Model\Element\AdminStyle;

class Car extends AdminStyle
{

    public function __construct($element)
    {
        parent::__construct($element);

        if($element instanceof \AppBundle\Model\Product\Car) {

            ForceInheritance::run(function() use ($element) {

                if($element->getObjectType() == 'actual-car') {
                    $this->elementIcon = '/bundles/pimcoreadmin/img/twemoji/1f697.svg';
                }

            });

        }

    }

}