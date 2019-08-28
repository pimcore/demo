<?php


namespace AppBundle\Controller;


use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @param Request $request
     * @param DataObject $object
     * @return bool
     */
    protected function verifyPreviewRequest(Request $request, DataObject $object): bool {
        if($request->get('pimcore_object_preview') && DataObject\Service::getObjectFromSession($object->getId())) {
            return true;
        }

        return false;
    }
}