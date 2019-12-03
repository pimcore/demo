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

namespace AppBundle\Website\LinkGenerator;

use AppBundle\Model\Product\AccessoryPart;
use AppBundle\Model\Product\Car;
use AppBundle\Website\Tool\ForceInheritance;
use AppBundle\Website\Tool\Text;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\ProductInterface;
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
        if (!($object instanceof Car || $object instanceof AccessoryPart)) {
            throw new \InvalidArgumentException('Given object is no Car');
        }

        return $this->doGenerate($object, $params);
    }

    /**
     * @param ProductInterface $object
     * @param array $params
     * @return string
     */
    public function generateWithMockup(ProductInterface $object, array $params = []): string {
        return $this->doGenerate($object, $params);
    }

    /**
     * @param $object
     * @param $params
     * @return string
     */
    protected function doGenerate($object, $params): string
    {
        return ForceInheritance::run(function () use ($object, $params) {
            return $this->pimcoreUrl->__invoke(
                [
                    'productname' => Text::toUrl($object->getOSName() ? $object->getOSName() : 'product'),
                    'product' => $object->getId(),
                    'path' => $this->getNavigationPath($object->getMainCategory(), $params['rootCategory'] ?? null),
                    'page' => null
                ],
                'shop-detail',
                true
            );
        });
    }
}
