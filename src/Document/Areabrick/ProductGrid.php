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

use Pimcore\Model\DataObject\FilterDefinition;
use Pimcore\Model\Document\Editable\Area\Info;

class ProductGrid extends AbstractAreabrick
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Product Grid';
    }

    public function action(Info $info)
    {
        /**
         * @var $filterDefinition FilterDefinition
         */
        $filterDefinition = $this->getDocumentEditable($info->getDocument(), 'relation', 'productFilter')->getElement();
        $info->setParam('filterDefinitionObject', $filterDefinition);
    }
}
