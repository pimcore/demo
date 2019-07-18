<?php

namespace AppBundle\Controller;

use Pimcore\Controller\Configuration\ResponseHeader;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends BaseController
{
    public function defaultAction()
    {
    }

    /**
     * The annotations below demonstrate the ResponseHeader annotation which can be
     * used to set custom response headers on the auto-rendered response. At this point, the headers
     * are not really set as we don't have a response yet, but they will be added to the final response
     * by the ResponseHeaderListener.
     *
     * @ResponseHeader("X-Custom-Header", values={"Foo", "Bar"})
     * @ResponseHeader("X-Custom-Header2", values="Bazinga", replace=true)
     */
    public function portalAction()
    {
        // you can also set the header via code
        $this->addResponseHeader('X-Custom-Header3', ['foo', 'bar']);

        $this->view->isPortal = true;
    }
}