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

namespace App\Twig\Extension;

use App\Website\LinkGenerator\NewsLinkGenerator;
use Pimcore\Model\DataObject\News;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class NewsExtension extends AbstractExtension
{
    /**
     * @var NewsLinkGenerator
     */
    protected $newsLinkGenerator;

    /**
     * NewsExtension constructor.
     *
     * @param NewsLinkGenerator $newsLinkGenerator
     */
    public function __construct(NewsLinkGenerator $newsLinkGenerator)
    {
        $this->newsLinkGenerator = $newsLinkGenerator;
    }

    /**
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('app_news_detaillink', [$this, 'generateLink']),
        ];
    }

    /**
     * @param News $news
     *
     * @return string
     */
    public function generateLink(News $news): string
    {
        return $this->newsLinkGenerator->generate($news, []);
    }
}
