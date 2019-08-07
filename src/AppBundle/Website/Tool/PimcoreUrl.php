<?php


namespace AppBundle\Website\Tool;


class PimcoreUrl extends \Pimcore\Templating\Helper\PimcoreUrl
{

    /**
     * @param array $urlOptions
     * @param null $name
     * @param bool $reset
     * @param bool $encode
     * @param bool $relative
     *
     * @return string
     */
    public function __invoke(array $urlOptions = [], $name = null, $reset = false, $encode = true, $relative = false)
    {
        // merge all parameters from request to parameters
        if (!$reset && $this->requestHelper->hasMasterRequest()) {
            $urlOptions = array_replace($this->requestHelper->getMasterRequest()->attributes->get('_route_params'), $urlOptions);
        }

        return parent::__invoke($urlOptions, $name, $reset, $encode, $relative);
    }


}