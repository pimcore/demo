<?php

declare(strict_types=1);

/**
 * This source file is available under the terms of the
 * Pimcore Open Core License (POCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (https://www.pimcore.com)
 *  @license    Pimcore Open Core License (POCL)
 */

namespace App\Sitemaps\Processors;

use Pimcore\Bundle\SeoBundle\Sitemap\Element\GeneratorContextInterface;
use Pimcore\Bundle\SeoBundle\Sitemap\Element\ProcessorInterface;
use Pimcore\Bundle\SeoBundle\Sitemap\UrlGeneratorInterface;
use Pimcore\Model\Element\ElementInterface;
use Presta\SitemapBundle\Sitemap\Url\Url;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;

class AbsoluteURLProcessor implements ProcessorInterface
{
    public function __construct(private UrlGeneratorInterface $urlGenerator)
    {
    }

    public function process(Url $url, ElementInterface $element, GeneratorContextInterface $context): ?Url
    {
        $path = $this->urlGenerator->generateUrl($url->getLoc());

        return new UrlConcrete($path);
    }
}
