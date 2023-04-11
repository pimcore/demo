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

namespace App\Controller;

use App\Website\LinkGenerator\NewsLinkGenerator;
use App\Website\Navigation\BreadcrumbHelperService;
use Knp\Component\Pager\PaginatorInterface;
use Pimcore\Model\DataObject\News;
use Pimcore\Twig\Extension\Templating\HeadTitle;
use Pimcore\Twig\Extension\Templating\Placeholder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends BaseController
{
    const NEWS_DEFAULT_DOCUMENT_PROPERTY_NAME = 'news_default_document';

    /**
     * @throws \Exception
     */
    public function listingAction(Request $request, PaginatorInterface $paginator): Response
    {
        // get a list of news objects and order them by date
        $newsList = new News\Listing();
        $newsList->setOrderKey('date');
        $newsList->setOrder('DESC');

        $paginator = $paginator->paginate(
            $newsList,
            $request->get('page', 1),
            6
        );

        return $this->render('news/listing.html.twig', [
            'news' => $paginator,
            'paginationVariables' => $paginator->getPaginationData()
        ]);
    }

    /**
     * @Route("{path}/{newstitle}~n{news}", name="news-detail", defaults={"path"=""}, requirements={"path"=".*?", "newstitle"="[\w-]+", "news"="\d+"})
     */
    public function detailAction(Request $request, HeadTitle $headTitleHelper, Placeholder $placeholderHelper, NewsLinkGenerator $newsLinkGenerator, BreadcrumbHelperService $breadcrumbHelperService): Response
    {
        $news = News::getById($request->get('news'));

        if (!($news instanceof News && ($news->isPublished() || $this->verifyPreviewRequest($request, $news)))) {
            throw new NotFoundHttpException('News not found.');
        }

        $headTitleHelper($news->getTitle());
        $breadcrumbHelperService->enrichNewsPage($news);

        $placeholderHelper('canonical')->set($newsLinkGenerator->generate($news, ['document' => $this->document->getProperty(self::NEWS_DEFAULT_DOCUMENT_PROPERTY_NAME)]));

        return $this->render('news/detail.html.twig', [
            'news' => $news
        ]);
    }

    public function newsTeaserAction(Request $request): Response
    {
        $paramsBag = [];
        if ($request->get('type') === 'object') {
            $news = News::getById($request->get('id'));
            $paramsBag['news'] = $news;

            return $this->render('news/news_teaser.html.twig', $paramsBag);
        }

        throw new NotFoundHttpException('News not found.');
    }

    public function emailNewsTeaserAction(Request $request, NewsLinkGenerator $newsLinkGenerator): Response
    {
        $paramsBag = [];
        if ($request->get('type') === 'object') {
            $news = News::getById($request->get('id'));
            $paramsBag['news'] = $news;
            $paramsBag['detailLink'] = $newsLinkGenerator->generate($news, ['document' => $this->document->getProperty('news_default_document')]);

            return $this->render('news/email_news_teaser.html.twig', $paramsBag);
        }

        throw new NotFoundHttpException('News not found.');
    }
}
