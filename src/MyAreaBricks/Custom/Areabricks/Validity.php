<?php

/**
 * This source file is available under the terms of the
 * Pimcore Open Core License (POCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (https://www.pimcore.com)
 *  @license    Pimcore Open Core License (POCL)
 */

namespace App\MyAreaBricks\Custom\Areabricks;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;
use Pimcore\Extension\Document\Areabrick\Attribute\AsAreabrick;

#[AsAreabrick(id: 'validity')]
class Validity extends AbstractTemplateAreabrick
{
    public function getName(): string
    {
        return 'Validity';
    }
}
