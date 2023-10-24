<?php

namespace App\MyAreaBricks\Custom\Areabricks;

use Pimcore\Extension\Document\Areabrick\Attribute\AsAreabrick;
use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

#[AsAreabrick(id: 'validity')]
class Validity extends AbstractTemplateAreabrick
{
    public function getName(): string
    {
        return 'Validity';
    }
}
