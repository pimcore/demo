<?php


namespace AppBundle\Controller;


use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class BaseController extends FrontendController
{
    /**
     * @inheritDoc
     */
    public function onKernelController(FilterControllerEvent $event)
    {
        // enable view auto-rendering
        $this->setViewAutoRender($event->getRequest(), true, 'twig');
    }
}