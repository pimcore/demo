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
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace App\Sitemaps;

use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ProductListInterface;
use Pimcore\Bundle\SeoBundle\Sitemap\Element\AbstractElementGenerator;
use Pimcore\Bundle\SeoBundle\Sitemap\Element\GeneratorContext;
use Pimcore\Model\DataObject\Car;
use Presta\SitemapBundle\Service\UrlContainerInterface;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ProductGenerator extends AbstractElementGenerator
{
    public function populate(UrlContainerInterface $urlContainer, ?string $section = null): void
    {
        if (null !== $section && $section !== 'cars') {
            // do not add entries if section doesn't match
            return;
        }

        $section = 'cars';

        $indexService = Factory::getInstance()->getIndexService();
        $productListing = $indexService->getProductListForCurrentTenant();
        $productListing->addCondition('carClass IS NOT NULL', 'carClass');
        $productListing->setVariantMode(ProductListInterface::VARIANT_MODE_VARIANTS_ONLY);
        $list = $productListing;

        // the context contains metadata for filters/processors
        // it contains at least the url container, but you can add additional data
        // with the params parameter
        $context = new GeneratorContext($urlContainer, $section, ['foo' => 'bar']);

        /** @var Car $car */
        foreach ($list as $car) {
            // only add element if it is not filtered
            if (!$this->canBeAdded($car, $context)) {
                continue;
            }

            // use a link generator to generate an URL to the article
            // you need to make sure the link generator generates an absolute url
            $link = $car->getClass()->getLinkGenerator()->generate($car, [
                'referenceType' => UrlGeneratorInterface::ABSOLUTE_URL
            ]);

            // create an entry for the sitemap
            $url = new UrlConcrete($link);

            // run url through processors
            $url = $this->process($url, $car, $context);

            // processors can return null to exclude the url
            if (null === $url) {
                continue;
            }

            // add the url to the container
            $urlContainer->addUrl($url, $section);
        }
    }
}
