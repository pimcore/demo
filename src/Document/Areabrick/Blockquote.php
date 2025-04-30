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

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\EditableDialogBoxConfiguration;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxInterface;
use Pimcore\Model\Document\Editable;

class Blockquote extends AbstractAreabrick implements EditableDialogBoxInterface
{
    public function getEditableDialogBoxConfiguration(Editable $area, ?Editable\Area\Info $info): EditableDialogBoxConfiguration
    {
        $config = new EditableDialogBoxConfiguration();
        $config->setWidth(600);
        //$config->setReloadOnClose(true);
        $config->setItems([
            [
                'type' => 'input',
                'label' => 'Some additional Text', // labels are optional
                'name' => 'myDialogInput'
            ],
            [
                'type' => 'checkbox',
                'name' => 'myDialogCheckbox',
                'label' => 'This is the checkbox label',
            ],
            [
                'type' => 'date',
                'name' => 'myDialogDate'
            ]
        ]);

        return $config;
    }

    public function needsReload(): bool
    {
        return false;
    }
}
