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

use AppBundle\Website\Tool\ForceInheritance;
use AppBundle\Website\Tool\Text;
use Pimcore\Http\Request\Resolver\DocumentResolver;
use Pimcore\Localization\LocaleServiceInterface;
use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\News;
use Pimcore\Model\Document;
use Pimcore\Templating\Helper\PimcoreUrl;
use Symfony\Component\HttpFoundation\RequestStack;

class NewsLinkGenerator implements LinkGeneratorInterface
{
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

    /**
     * @param Concrete $object
     * @param array $params
     *
     * @return string
     */
    public function generate(Concrete $object, array $params = []): string
    {
        if (!($object instanceof News)) {
            throw new \InvalidArgumentException('Given object is no News');
        }

        return ForceInheritance::run(function () use ($object, $params) {
            $fullPath = '';

            if (isset($params['document']) && $params['document'] instanceof Document) {
                $document = $params['document'];
            } else {
                $document = $this->documentResolver->getDocument($this->requestStack->getCurrentRequest());
            }

            $localeUrlPart = '/' . $this->localeService->getLocale() . '/';
            if ($document && $localeUrlPart !== $document->getFullPath()) {
                $fullPath = substr($document->getFullPath(), strlen($localeUrlPart));
            }

            if(!$fullPath) {
                $fullPath = $document->getProperty('news_default_document') ? substr($document->getProperty('news_default_document')->getFullPath(), strlen($localeUrlPart)) : '';
            }

            return $this->pimcoreUrl->__invoke(
                [
                'newstitle' => Text::toUrl($object->getTitle() ? $object->getTitle() : 'news'),
                'news' => $object->getId(),
                'path' => $fullPath
            ],
                'news-detail',
                true
            );
        });
    }
}
