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
use Pimcore\Localization\LocaleServiceInterface;
use Pimcore\Model\DataObject\News;
use Pimcore\Model\Document;
use Presta\SitemapBundle\Service\UrlContainerInterface;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class NewsGenerator extends AbstractElementGenerator
{
    public function __construct(protected LocaleServiceInterface $localeService, array $filters = [], array $processors = [])
    {
        parent::__construct($filters, $processors);
    }

    public function populate(UrlContainerInterface $urlContainer, ?string $section = null): void
    {
        if (null !== $section && $section !== 'news') {
            // do not add entries if section doesn't match
            return;
        }

        $section = 'news';

        $list = new News\Listing();
        $list->setOrderKey('date');
        $list->setOrder('DESC');

        // the context contains metadata for filters/processors
        // it contains at least the url container, but you can add additional data
        // with the params parameter
        $context = new GeneratorContext($urlContainer, $section, ['foo' => 'bar']);

        //change locale as per multilingual setup
        $this->localeService->setLocale('en');

        /** @var News $newsArticle */
        foreach ($list as $newsArticle) {
            // only add element if it is not filtered
            if (!$this->canBeAdded($newsArticle, $context)) {
                continue;
            }

            // use a link generator to generate an URL to the article
            // you need to make sure the link generator generates an absolute url
            $link = $newsArticle->getClass()->getLinkGenerator()->generate($newsArticle, [
                'referenceType' => UrlGeneratorInterface::ABSOLUTE_URL,
                'document' => Document::getByPath('/en/News')
            ]);

            // create an entry for the sitemap
            $url = new UrlConcrete($link);

            // run url through processors
            $url = $this->process($url, $newsArticle, $context);

            // processors can return null to exclude the url
            if (null === $url) {
                continue;
            }

            // add the url to the container
            $urlContainer->addUrl($url, $section);
        }
    }
}
