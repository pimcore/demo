<?php

namespace AppBundle\Controller;

use Pimcore\Model\Asset;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends BaseController
{

    /**
     * @param Request $request
     * @Route("/examples", name="examples")
     */
    public function examplesAction(Request $request)
    {
    }

    public function defaultAction(Request $request)
    {
    }

    /**
     * @param Request $request
     * @return array
     */
    public function genericMailAction(Request $request) {
    }

    /**
     * @param Request $request
     * @return array
     */
    public function galleryRenderletAction(Request $request)
    {
        if ($request->get('id') && $request->get('type') === 'asset') {
            return [
                'asset' => Asset::getById($request->get('id'))
            ];
        }

        return [];
    }


}
