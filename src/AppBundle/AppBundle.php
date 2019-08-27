<?php

namespace AppBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class AppBundle extends AbstractPimcoreBundle
{
    /**
     * Returns the bundle name that this bundle overrides.
     *
     * Despite its name, this method does not imply any parent/child relationship
     * between the bundles, just a way to extend and override an existing
     * bundle.
     *
     * @return string The Bundle name it overrides or null if no parent
     */
    public function getParent()
    {
        return null;
    }

    public function getJsPaths()
    {
        return [
          '/static/js/startup.js'
        ];
    }
}
