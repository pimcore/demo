<?php

declare(strict_types=1);

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

namespace App\Twig\Extension;

use App\Website\LinkGenerator\AbstractProductLinkGenerator;
use App\Website\LinkGenerator\CategoryLinkGenerator;
use App\Website\LinkGenerator\NewsLinkGenerator;
use App\Website\LinkGenerator\ProductLinkGenerator;
use Pimcore\Model\Document;
use Pimcore\Model\Document\Service;
use Pimcore\Tool;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Pimcore\Model\DataObject;

class LanguageSwitcherExtension extends AbstractExtension
{
    /**
     * @var Service|Service\Dao
     */
    private $documentService;

    private UrlGeneratorInterface $urlGenerator;
    private RequestStack $requestStack;
    private CategoryLinkGenerator $categoryLinkGenerator;
    private NewsLinkGenerator $newsLinkGenerator;
    private ProductLinkGenerator $productLinkGenerator;

    public function __construct(Service $documentService, UrlGeneratorInterface $urlGenerator, RequestStack $requestStack, CategoryLinkGenerator $categoryLinkGenerator, NewsLinkGenerator $newsLinkGenerator, ProductLinkGenerator $productLinkGenerator)
    {
        $this->documentService = $documentService;
        $this->urlGenerator = $urlGenerator;
        $this->requestStack = $requestStack;
        $this->categoryLinkGenerator = $categoryLinkGenerator;
        $this->newsLinkGenerator = $newsLinkGenerator;
        $this->productLinkGenerator = $productLinkGenerator;
    }

    public function getLocalizedLinks(Document $document): array
    {
        $dynamicRoutesMapping = [
            'shop-detail' => [
                'generator' => 'productLinkGenerator',
                'requiredField' => 'product'
            ],
            'shop-category' => [
                'generator' => 'categoryLinkGenerator',
                'requiredField' => 'category'
            ],
            'news-detail' => [
                'generator' => 'newsLinkGenerator',
                'requiredField' => 'news'
            ]
        ];

        $translations = $this->documentService->getTranslations($document);
        $request = $this->requestStack->getCurrentRequest();

        $links = [];
        foreach (Tool::getValidLanguages() as $language) {
            $target = '/' . $language;

            //skip if root document for local is missing
            if (!(Document::getByPath($target) instanceof Document)) {
                continue;
            }

            if (isset($translations[$language])) {
                $localizedDocument = Document::getById($translations[$language]);
                if ($localizedDocument) {
                    $target = $localizedDocument->getFullPath();
                }
            }

            $route = $request->get('_route');

            if ($route && array_key_exists($route, $dynamicRoutesMapping)) {
                $routeParams = $request->get('_route_params', []);
                $requiredField = $dynamicRoutesMapping[$route]['requiredField'];

                if (!array_key_exists($requiredField, $routeParams)){
                    continue;
                }

                $generator = $dynamicRoutesMapping[$route]['generator'];
                $object = $request->get($requiredField);

                if (!is_object($object)) {
                    $object = DataObject::getById($object);
                }
                
                $linkGeneratorService = $this->$generator;
                if ($linkGeneratorService instanceof LinkGeneratorInterface) {
                    $target = $linkGeneratorService->generate($object, ['locale' => \Locale::getPrimaryLanguage($language)]);
                }
            }

            $links[$language] = [
                'link' => $target,
                'text' => \Locale::getDisplayLanguage($language)
            ];
        }

        return $links;
    }

    /**
     * @param string $language
     * @return string
     */
    public function getLanguageFlag($language)
    {
        $flag = '';
        if (Tool::isValidLanguage($language)) {
            $flag = self::getLanguageFlagFile($language);
        }
        $flag = preg_replace('@^' . preg_quote(PIMCORE_WEB_ROOT, '@') . '@', '', $flag);

        return $flag;
    }

    /**
     * @inheritDoc
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_localized_links', [$this, 'getLocalizedLinks']),
            new TwigFunction('get_language_flag', [$this, 'getLanguageFlag'])
        ];
    }

    /**
     * @param string $language
     *
     * @return string
     */
    public static function getLanguageFlagFile($language)
    {
        $basePath = '/bundles/pimcoreadmin/img/flags';
        $code = strtolower($language);
        $iconPath = $basePath . '/countries/_unknown.svg';

        $languageCountryMapping = [
            'aa' => 'er', 'af' => 'za', 'am' => 'et', 'as' => 'in', 'ast' => 'es', 'asa' => 'tz',
            'az' => 'az', 'bas' => 'cm', 'eu' => 'es', 'be' => 'by', 'bem' => 'zm', 'bez' => 'tz', 'bg' => 'bg',
            'bm' => 'ml', 'bn' => 'bd', 'br' => 'fr', 'brx' => 'in', 'bs' => 'ba', 'cs' => 'cz', 'da' => 'dk',
            'de' => 'de', 'dz' => 'bt', 'el' => 'gr', 'en' => 'gb', 'es' => 'es', 'et' => 'ee', 'fi' => 'fi',
            'fo' => 'fo', 'fr' => 'fr', 'ga' => 'ie', 'gv' => 'im', 'he' => 'il', 'hi' => 'in', 'hr' => 'hr',
            'hu' => 'hu', 'hy' => 'am', 'id' => 'id', 'ig' => 'ng', 'is' => 'is', 'it' => 'it', 'ja' => 'jp',
            'ka' => 'ge', 'os' => 'ge', 'kea' => 'cv', 'kk' => 'kz', 'kl' => 'gl', 'km' => 'kh', 'ko' => 'kr',
            'lg' => 'ug', 'lo' => 'la', 'lt' => 'lt', 'mg' => 'mg', 'mk' => 'mk', 'mn' => 'mn', 'ms' => 'my',
            'mt' => 'mt', 'my' => 'mm', 'nb' => 'no', 'ne' => 'np', 'nl' => 'nl', 'nn' => 'no', 'pl' => 'pl',
            'pt' => 'pt', 'ro' => 'ro', 'ru' => 'ru', 'sg' => 'cf', 'sk' => 'sk', 'sl' => 'si', 'sq' => 'al',
            'sr' => 'rs', 'sv' => 'se', 'swc' => 'cd', 'th' => 'th', 'to' => 'to', 'tr' => 'tr', 'tzm' => 'ma',
            'uk' => 'ua', 'uz' => 'uz', 'vi' => 'vn', 'zh' => 'cn', 'gd' => 'gb-sct', 'gd-gb' => 'gb-sct',
            'cy' => 'gb-wls', 'cy-gb' => 'gb-wls', 'fy' => 'nl', 'xh' => 'za', 'yo' => 'bj', 'zu' => 'za',
            'ta' => 'lk', 'te' => 'in', 'ss' => 'za', 'sw' => 'ke', 'so' => 'so', 'si' => 'lk', 'ii' => 'cn',
            'zh-hans' => 'cn', 'sn' => 'zw', 'rm' => 'ch', 'pa' => 'in', 'fa' => 'ir', 'lv' => 'lv', 'gl' => 'es',
            'fil' => 'ph',
        ];

        if (array_key_exists($code, $languageCountryMapping)) {
            $iconPath = $basePath . '/countries/' . $languageCountryMapping[$code] . '.svg';
        }

        return $iconPath;
    }
}
