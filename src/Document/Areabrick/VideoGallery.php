<?php

namespace App\Document\Areabrick;

use Symfony\Contracts\Translation\TranslatorInterface;

class VideoGallery extends AbstractAreabrick
{
    private TranslatorInterface $translator;

    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->translator->trans('areabrick.videogallery.name');
    }
}
