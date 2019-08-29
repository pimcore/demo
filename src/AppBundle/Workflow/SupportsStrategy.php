<?php


namespace AppBundle\Workflow;


use AppBundle\Model\Product\Car;
use Symfony\Component\Workflow\SupportStrategy\WorkflowSupportStrategyInterface;
use Symfony\Component\Workflow\WorkflowInterface;

class SupportsStrategy implements WorkflowSupportStrategyInterface
{


    public function supports(WorkflowInterface $workflow, $subject): bool
    {

        if($workflow->getName() == 'product_data_enrichment') {
            if($subject instanceof Car && strpos($subject->getFullPath(), '/upload/new') === 0) {
                return true;
            }
        }

        return false;

    }
}