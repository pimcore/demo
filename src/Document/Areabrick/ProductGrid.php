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

use Pimcore\Model\DataObject\FilterDefinition;
use Pimcore\Model\Document\Editable\Area\Info;
use Symfony\Component\HttpFoundation\Response;

class ProductGrid extends AbstractAreabrick
{
    public function getName(): string
    {
        return 'Product Grid';
    }

    public function action(Info $info): ?Response
    {
        /**
         * @var $filterDefinition FilterDefinition
         */
        $filterDefinition = $this->getDocumentEditable($info->getDocument(), 'relation', 'productFilter')->getElement();
        $info->setParam('filterDefinitionObject', $filterDefinition);

        return null;
    }
}
