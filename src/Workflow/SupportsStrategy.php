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

namespace App\Workflow;

use App\Model\Product\Car;
use Symfony\Component\Workflow\SupportStrategy\WorkflowSupportStrategyInterface;
use Symfony\Component\Workflow\WorkflowInterface;

class SupportsStrategy implements WorkflowSupportStrategyInterface
{
    /**
     * @param WorkflowInterface $workflow
     * @param object $subject
     * @return bool
     */
    public function supports(WorkflowInterface $workflow, $subject): bool
    {
        if ($workflow->getName() == 'product_data_enrichment') {
            if ($subject instanceof Car && strpos($subject->getFullPath(), '/upload/new') === 0) {
                return true;
            }
        }

        return false;
    }
}
