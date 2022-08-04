<?php

declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace App\Sitemaps\Processors;

use Pimcore\Model\Element\ElementInterface;
use Pimcore\Sitemap\Element\GeneratorContextInterface;
use Pimcore\Sitemap\Element\ProcessorInterface;
use Pimcore\Sitemap\UrlGeneratorInterface;
use Presta\SitemapBundle\Sitemap\Url\Url;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;

class AbsoluteURLProcessor implements ProcessorInterface
{
    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param Url $url
     * @param ElementInterface $element
     * @param GeneratorContextInterface $context
     * @return UrlConcrete
     */
    public function process(Url $url, ElementInterface $element, GeneratorContextInterface $context)
    {
        $path = $this->urlGenerator->generateUrl($url->getLoc());
        $url  = new UrlConcrete($path);

        return $url;
    }
}
