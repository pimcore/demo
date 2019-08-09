<?php


namespace AppBundle\Website\LinkGenerator;

use AppBundle\Model\Product\AccessoryPart;
use AppBundle\Model\Product\Car;
use AppBundle\Website\Tool\ForceInheritance;
use AppBundle\Website\Tool\Text;
use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Model\DataObject\Concrete;

class ProductLinkGenerator extends AbstractProductLinkGenerator implements LinkGeneratorInterface
{

    /**
     * @param Concrete $object
     * @param array $params
     *
     * @return string
     */
    public function generate(Concrete $object, array $params = []): string
    {
        if(!($object instanceof Car || $object instanceof AccessoryPart)) {
            throw new \InvalidArgumentException("Given object is no Car");
        }

        return ForceInheritance::run(function() use ($object, $params) {
            return $this->pimcoreUrl->__invoke([
                'productname' => Text::toUrl($object->getOSName() ? $object->getOSName() : 'product'),
                'product' => $object->getId(),
                'path' => $this->getNavigationPath($object->getMainCategory(), $params['rootCategory']),
                'page' => null
            ],
                'shop-detail',
                true
            );
        });

    }
}