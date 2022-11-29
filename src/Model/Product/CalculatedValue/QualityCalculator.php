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

namespace App\Model\Product\CalculatedValue;

use App\Model\Product\Car;
use Pimcore\Model\DataObject\ClassDefinition\CalculatorClassInterface;
use Pimcore\Model\DataObject\ClassDefinition\Layout\DynamicTextLabelInterface;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\Data\CalculatedValue;
use Pimcore\Tool;

class QualityCalculator implements DynamicTextLabelInterface, CalculatorClassInterface
{
    /**
     * @param $object Concrete
     * @param $context CalculatedValue
     *
     * @return string
     */
    public function compute(Concrete $object, CalculatedValue $context): string
    {
        return $this->getCalculatedValueForEditMode($object, $context);
    }

    /**
     * @param $object
     * @param $context CalculatedValue
     *
     * @return string
     */
    public function getCalculatedValueForEditMode(Concrete $object, CalculatedValue $context): string
    {
        if ($object instanceof Car) {
            if ($context->getFieldname() == 'textsAvailable') {
                if ($object->getName($context->getPosition()) && $object->getDescription($context->getPosition())) {
                    return 'completed';
                }
            }

            if ($context->getFieldname() == 'attributesAvailable') {
                if ($object->getAttributes() && $object->getAttributes()->getItems()) {
                    return 'completed';
                }
            }

            if ($context->getFieldname() == 'saleInformationAvailable') {
                if ($object->getSaleInformation() && $object->getSaleInformation()->getSaleInformation()) {
                    return 'completed';
                }
            }

            if ($context->getFieldname() == 'imagesAvailable') {
                if ($object->getMainImage()) {
                    return 'completed';
                }
            }

            return 'not completed';
        } else {
            return '';
        }
    }

    /**
     * @param $data
     * @param $object
     * @param $params
     *
     * @return string
     */
    public function renderLayoutText($data, $object, $params): string
    {
        if ($object instanceof Car) {
            $quality = [];

            $hasMissing = false;
            $hasCompleted = false;
            foreach (Tool::getValidLanguages() as $language) {
                if ($object->getTextsAvailable($language) == 'not completed') {
                    $hasMissing = true;
                } elseif ($object->getTextsAvailable($language) == 'completed') {
                    $hasCompleted = true;
                }
            }

            $quality['Texts Available'] = !$hasCompleted ? 'not completed' : (!$hasMissing ? 'completed' : 'partly completed');
            $quality['Attributes Available'] = $object->getAttributesAvailable();
            $quality['Sale Information Available'] = $object->getSaleInformationAvailable();
            $quality['Images Available'] = $object->getImagesAvailable();

            $htmlTable = "<table class='qa-summary-table'>";

            $htmlTable .= '<thead><tr><td>Elements</td><td>State</td></tr></thead>';

            foreach ($quality as $key => $value) {
                $cssClass = '';
                switch ($value) {
                    case 'completed':
                        $cssClass = 'qa-completed';
                        break;
                    case 'not completed':
                        $cssClass = 'qa-not-completed';
                        break;
                    case 'partly completed':
                        $cssClass = 'qa-partly-completed';
                        break;

                }

                $htmlTable .= "<tr class='$cssClass'>";
                $htmlTable .= "<td>$key</td>";
                $htmlTable .= "<td>$value</td>";
                $htmlTable .= '</tr>';
            }

            $htmlTable .= '</table>';

            return "<h2 style='margin-top: 0'>Data Quality Summary</h2>" . $htmlTable;
        } else {
            return '';
        }
    }
}
