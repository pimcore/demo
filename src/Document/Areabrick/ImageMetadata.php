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

class ImageMetadata extends AbstractAreabrick implements EditableDialogBoxInterface
{
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
