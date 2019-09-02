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

namespace AppBundle\Controller;

use AppBundle\Website\LinkGenerator\NewsLinkGenerator;
use AppBundle\Website\Navigation\BreadcrumbHelperService;
use Pimcore\Model\DataObject\News;
use Pimcore\Templating\Helper\HeadTitle;
use Pimcore\Templating\Helper\Placeholder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Zend\Paginator\Paginator;

class NewsController extends BaseController
{
    const NEWS_DEFAULT_DOCUMENT_PROPERTY_NAME = 'news_default_document';

    /**
     * @param Request $request
     *
     * @return array
     *
     * @throws \Exception
     */
    public function listingAction(Request $request)
    {

        // get a list of news objects and order them by date
        $newsList = new News\Listing();
        $newsList->setOrderKey('date');
        $newsList->setOrder('DESC');

        $paginator = new Paginator($newsList);
        $paginator->setCurrentPageNumber($request->get('page'));
        $paginator->setItemCountPerPage(6);

        return [
            'news' => $paginator,
            'paginationVariables' => $paginator->getPages('Sliding')
        ];
    }

    /**
     * @Route("{path}/{newstitle}~n{news}", name="news-detail", defaults={"path"=""}, requirements={"path"=".*?", "newstitle"="[\w-]+", "news"="\d+"})
     *
     * @param Request $request
     * @param HeadTitle $headTitleHelper
     * @param Placeholder $placeholderHelper
     * @param NewsLinkGenerator $newsLinkGenerator
     * @param BreadcrumbHelperService $breadcrumbHelperService
     *
     * @return array
     */
    public function detailAction(Request $request, HeadTitle $headTitleHelper, Placeholder $placeholderHelper, NewsLinkGenerator $newsLinkGenerator, BreadcrumbHelperService $breadcrumbHelperService)
    {
        $news = News::getById($request->get('news'));

        if (!($news instanceof News && ($news->isPublished() || $this->verifyPreviewRequest($request, $news)))) {
            throw new NotFoundHttpException('News not found.');
        }

        $headTitleHelper($news->getTitle());
        $breadcrumbHelperService->enrichNewsPage($news);

        $placeholderHelper('canonical')->set($newsLinkGenerator->generate($news, ['document' => $this->document->getProperty(self::NEWS_DEFAULT_DOCUMENT_PROPERTY_NAME)]));

        return [
            'news' => $news
        ];
    }

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newsTeaserAction(Request $request)
    {
        $paramsBag = [];
        if ($request->get('type') == 'object') {
            $news = News::getById($request->get('id'));
            $paramsBag['news'] = $news;

            return $this->render('news/news_teaser.html.twig', $paramsBag);
        }

        throw new NotFoundHttpException('News not found.');
    }

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function emailNewsTeaserAction(Request $request, NewsLinkGenerator $newsLinkGenerator)
    {
        $paramsBag = [];
        if ($request->get('type') == 'object') {
            $news = News::getById($request->get('id'));
            $paramsBag['news'] = $news;
            $paramsBag['detailLink'] = $newsLinkGenerator->generate($news, ['document' => $this->document->getProperty('news_default_document')]);

            return $this->render('news/email_news_teaser.html.twig', $paramsBag);
        }

        throw new NotFoundHttpException('News not found.');
    }
}
