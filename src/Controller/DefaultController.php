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

namespace App\Controller;

use Pimcore\Model\Asset;
use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends BaseController
{
    #[Route('/examples', name: 'examples')]
    public function examplesAction(): Response
    {
        return $this->render('default/examples.html.twig');
    }

    #[Template('default/default.html.twig')]
    public function defaultAction(): array
    {
        return [];
    }

    public function genericMailAction(): Response
    {
        return $this->render('default/generic_mail.html.twig');
    }

    public function galleryRenderletAction(Request $request): Response
    {
        $params = [];
        if ($request->attributes->getInt('id') && $request->attributes->getString('type') === 'asset') {
            $params['asset'] =  Asset::getById($request->attributes->getInt('id'));
        }

        return $this->render('default/gallery_renderlet.html.twig', $params);
    }
}
