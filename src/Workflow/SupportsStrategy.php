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

namespace App\Workflow;

use App\Model\Product\Car;
use Symfony\Component\Workflow\SupportStrategy\WorkflowSupportStrategyInterface;
use Symfony\Component\Workflow\WorkflowInterface;

class SupportsStrategy implements WorkflowSupportStrategyInterface
{
    public function supports(WorkflowInterface $workflow, object $subject): bool
    {
        if ($workflow->getName() == 'product_data_enrichment') {
            if ($subject instanceof Car && strpos($subject->getFullPath(), '/upload/new') === 0) {
                return true;
            }
        }

        return false;
    }
}
