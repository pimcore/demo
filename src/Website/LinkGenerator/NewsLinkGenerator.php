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

namespace App\Website\LinkGenerator;

use App\Website\Tool\Text;
use Pimcore\Http\Request\Resolver\DocumentResolver;
use Pimcore\Localization\LocaleServiceInterface;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Model\DataObject\News;
use Pimcore\Model\Document;
use Pimcore\Twig\Extension\Templating\PimcoreUrl;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Generates URI links for News Data-Objects
 * @todo stop using direct ID. You can use slug field or at least UUID
 */
class NewsLinkGenerator implements LinkGeneratorInterface
{
    const DEFAULT_DOCUMENT = 'news_default_document';

    /**
     * @var DocumentResolver
     */
    protected $documentResolver;

    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @var PimcoreUrl
     */
    protected $pimcoreUrl;

    /**
     * @var LocaleServiceInterface
     */
    protected $localeService;

    /**
     * NewsLinkGenerator constructor.
     *
     * @param DocumentResolver $documentResolver
     * @param RequestStack $requestStack
     * @param PimcoreUrl $pimcoreUrl
     * @param LocaleServiceInterface $localeService
     */
    public function __construct(DocumentResolver $documentResolver, RequestStack $requestStack, PimcoreUrl $pimcoreUrl, LocaleServiceInterface $localeService)
    {
        $this->documentResolver = $documentResolver;
        $this->requestStack = $requestStack;
        $this->pimcoreUrl = $pimcoreUrl;
        $this->localeService = $localeService;
    }

    public function generate(object $object, array $params = []): string
    {
        if (!($object instanceof News)) {
            throw new \InvalidArgumentException('Given object is no News');
        }

        return DataObject\Service::useInheritedValues(true, function () use ($object, $params) {
            $fullPath = '';

            if (isset($params['document']) && $params['document'] instanceof Document) {
                $document = $params['document'];
            } else {
                $document = $this->documentResolver->getDocument($this->requestStack->getCurrentRequest());
            }

            $localeUrlPart = '/' . $this->localeService->getLocale() . '/';

            if ($document) {
                if ($localeUrlPart !== $document->getFullPath()) {
                    $fullPath = substr($document->getFullPath(), strlen($localeUrlPart));
                }
                if (!$fullPath) {
                    $fullPath = $document->getProperty(static::DEFAULT_DOCUMENT) ? substr($document->getProperty(static::DEFAULT_DOCUMENT)->getFullPath(), strlen($localeUrlPart)) : '';
                }
            }
            if (!$fullPath) {
                throw new \InvalidArgumentException('Set parameter '.static::DEFAULT_DOCUMENT.' for the root or current document.');
            }

            $locale = $params['locale'] ?? null;

            return $this->pimcoreUrl->__invoke(
                [
                    'newstitle' => Text::toUrl($object->getTitle($locale) ? $object->getTitle($locale) : 'news'),
                    'news'      => $object->getId(),
                    'path'      => $fullPath,
                    '_locale'   => $locale,
                ],
                'news-detail',
                true
            );
        });
    }
}
