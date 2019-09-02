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

namespace AppBundle\Twig\Extension;

use Pimcore\Model\Document;
use Pimcore\Model\Document\Service;
use Pimcore\Tool;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class LanguageSwitcherExtension extends AbstractExtension
{
    /**
     * @var Service|Service\Dao
     */
    private $documentService;

    public function __construct(Service $documentService)
    {
        $this->documentService = $documentService;
    }

    public function getLocalizedLinks(Document $document): array
    {
        $translations = $this->documentService->getTranslations($document);

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

            $links[$language] = [
                'link' => $target,
                'text' => \Locale::getDisplayLanguage($language)
            ];
        }

        return $links;
    }

    public function getLanguageFlag($language)
    {
        $flag = '';
        if (Tool::isValidLanguage($language)) {
            $flag = Tool::getLanguageFlagFile($language);
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
}
