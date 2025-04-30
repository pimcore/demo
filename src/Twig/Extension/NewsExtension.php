<?php

/**
 * This source file is available under the terms of the
 * Pimcore Open Core License (POCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (https://www.pimcore.com)
 *  @license    Pimcore Open Core License (POCL)
 */

namespace App\Twig\Extension;

use App\Website\LinkGenerator\NewsLinkGenerator;
use Pimcore\Model\DataObject\News;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class NewsExtension extends AbstractExtension
{
    /**
     * NewsExtension constructor.
     */
    public function __construct(protected NewsLinkGenerator $newsLinkGenerator)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('app_news_detaillink', [$this, 'generateLink']),
        ];
    }

    public function generateLink(News $news): string
    {
        return $this->newsLinkGenerator->generate($news);
    }
}
