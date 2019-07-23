<?php

namespace AppBundle\Document\Areabrick;

class GalleryCarousel extends AbstractAreabrick
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Gallery (Carousel)';
    }

    public function hasEditTemplate()
    {
        return true;
    }
}
