<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
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
