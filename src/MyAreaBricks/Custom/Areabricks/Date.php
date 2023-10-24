<?php

namespace App\MyAreaBricks\Custom\Areabricks;

use Pimcore\Extension\Document\Areabrick\Attribute\AsAreabrick;
use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

#[AsAreabrick(id: 'date')]
class Date extends AbstractTemplateAreabrick
{
    public function getName(): string
    {
        return 'Date';
    }
}
