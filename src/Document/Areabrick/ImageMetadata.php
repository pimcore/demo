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

class ImageMetadata extends AbstractAreabrick implements EditableDialogBoxInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Image w. Metadata';
    }

    public function getEditableDialogBoxConfiguration(Editable $area, ?Editable\Area\Info $info): EditableDialogBoxConfiguration
    {
        $config = new EditableDialogBoxConfiguration();
        $config->setWidth(600);
        $config->setItems([
            'type' => 'tabpanel',
            'items' => [
                [
                    'type' => 'panel',
                    'title' => 'Image Author Details',
                    'items' => [
                        [
                            'type' => 'input',
                            'label' => 'Image Author',
                            'name' => 'imgAuhor'
                        ],
                        [
                            'type' => 'link',
                            'label' => 'Image Author Link',
                            'name' => 'imgAuthorLink'
                        ]
                    ]
                ],
                [
                    'type' => 'panel',
                    'title' => 'Additional Information',
                    'items' => [
                        [
                            'type' => 'wysiwyg',
                            'label' => 'Some additional Text',
                            'name' => 'imgAdditionalText'
                        ]
                    ]
                ]
            ]
        ]);

        return $config;
    }
}
