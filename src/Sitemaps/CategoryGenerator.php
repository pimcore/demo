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

namespace App\Sitemaps;

use Pimcore\Bundle\SeoBundle\Sitemap\Element\AbstractElementGenerator;
use Pimcore\Bundle\SeoBundle\Sitemap\Element\GeneratorContext;
use Pimcore\Model\DataObject\Category;
use Presta\SitemapBundle\Service\UrlContainerInterface;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CategoryGenerator extends AbstractElementGenerator
{
    public function __construct(array $filters = [], array $processors = [])
    {
        parent::__construct($filters, $processors);
    }

    public function populate(UrlContainerInterface $urlContainer, ?string $section = null): void
    {
        if (null !== $section && $section !== 'category') {
            // do not add entries if section doesn't match
            return;
        }

        $section = 'category';

        $list = new Category\Listing();

        // the context contains metadata for filters/processors
        // it contains at least the url container, but you can add additional data
        // with the params parameter
        $context = new GeneratorContext($urlContainer, $section, ['de' => 'de']);

        /** @var Category $category */
        foreach ($list as $category) {
            // only add element if it is not filtered
            if (!$this->canBeAdded($category, $context)) {
                continue;
            }

            // use a link generator to generate an URL to the article
            // you need to make sure the link generator generates an absolute url
            $link = $category->getClass()->getLinkGenerator()->generate($category, [
                'referenceType' => UrlGeneratorInterface::ABSOLUTE_URL
            ], true);

            // create an entry for the sitemap
            $url = new UrlConcrete($link);

            // run url through processors
            $url = $this->process($url, $category, $context);

            // processors can return null to exclude the url
            if (null === $url) {
                continue;
            }

            // add the url to the container
            $urlContainer->addUrl($url, $section);
        }
    }
}
