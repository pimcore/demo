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

namespace App\Twig\Extension;

use App\Website\Tool\Text;
use Pimcore\Model\Asset\Image;
use Pimcore\Model\DataObject\ClassDefinition\Data\Hotspotimage;
use Pimcore\Model\DataObject\ClassDefinition\Data\ImageGallery;
use Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation;
use Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation;
use Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect;
use Pimcore\Model\DataObject\ClassDefinition\Data\Select;
use Pimcore\Model\Element\AbstractElement;
use Pimcore\Translation\Translator;
use Pimcore\Twig\Extension\Templating\Placeholder;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PrintCatalogExtension extends AbstractExtension
{
    /**
     * PrintCatalogExtension constructor.
     */
    public function __construct(protected Translator $translator, protected Placeholder $placeholderHelper)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('app_print_output_spec_value', [$this, 'getSpecValue']),
            new TwigFunction('app_print_create_register', [$this, 'createRegisterTitleStyling']),
            new TwigFunction('app_print_get_register_name', [$this, 'getRegisterName'])
        ];
    }

    public function getSpecValue(\stdClass $outputElement, string $thumbnailName = null): string
    {
        if ($outputElement->value instanceof Image) {
            return $this->printImage($outputElement->value, $thumbnailName);
        } elseif (($outputElement->def ?? null) instanceof ImageGallery) {
            return $this->printImageGallery($outputElement->value, $thumbnailName);
        } elseif (($outputElement->def ?? null) instanceof Hotspotimage) {
            return $this->printHotspotImage($outputElement->value, $thumbnailName);
        } elseif (($outputElement->def ?? null) instanceof Select) {
            return $this->printSelectValue($outputElement->value);
        } elseif (($outputElement->def ?? null) instanceof Multiselect) {
            return $this->printMultiSelectValue($outputElement->value);
        } elseif (($outputElement->def ?? null) instanceof ManyToOneRelation) {
            return $this->printManyToOne($outputElement->value);
        } elseif (($outputElement->def ?? null) instanceof ManyToManyObjectRelation) {
            return $this->printManyToManyObjects($outputElement->value);
        } else {
            return $outputElement->value;
        }
    }

    protected function printImage(Image $image, string $thumbnailName): string
    {
        $src = $thumbnailName ? $image->getThumbnail($thumbnailName) : $image->getFullPath();

        return "<img src='$src' alt='image' />";
    }

    protected function printImageGallery(\Pimcore\Model\DataObject\Data\ImageGallery $imageGallery, string $thumbnailName): string
    {
        $firstItem = $imageGallery->current();
        if ($firstItem && $firstItem->getImage()) {
            return $this->printImage($firstItem->getImage(), $thumbnailName);
        }

        return '';
    }

    protected function printHotspotImage(\Pimcore\Model\DataObject\Data\Hotspotimage $hotspotimage, string $thumbnailName): string
    {
        $image = $hotspotimage->getImage();
        if ($image) {
            return "<img src='{$hotspotimage->getThumbnail($thumbnailName)}' alt='image' />";
        }
    }

    protected function printSelectValue(string $value): string
    {
        return $this->translator->trans('attribute.' . strtolower($value));
    }

    protected function printMultiSelectValue(?array $value = null): string
    {
        $result = [];
        if ($value) {
            foreach ($value as $v) {
                $result[] = $this->translator->trans('attribute.' . strtolower($v));
            }
        }

        return implode(', ', $result);
    }

    protected function printManyToManyObjects(array $value): string
    {
        $result = [];
        if ($value) {
            foreach ($value as $v) {
                if (method_exists($v, 'getName')) {
                    $result[] = $v->getName();
                }
            }
        }

        return implode(', ', $result);
    }

    protected function printManyToOne(?AbstractElement $element = null): string
    {
        if ($element && method_exists($element, 'getName')) {
            return $element->getName();
        }

        return '';
    }

    public function createRegisterTitleStyling(?string $name, ?string $registerType = ''): void
    {
        $key = $this->getRegisterName($name);

        if ($name) {
            $this->placeholderHelper->__invoke('register-title-definition')->append("

                @page $key:right {
                    @left-top {
                        content: xhtml(\"<div class='register left register-$registerType'>$name</div>\");
                        z-index: 2000;
                    }
                }

                @page $key:left {
                    @right-top {
                        content: xhtml(\"<div class='register register-$registerType'>$name</div>\");
                        z-index: 2000;
                    }
                }

                .page.$key {
                    page: $key;
                }

        ");
        }
    }

    public function getRegisterName(?string $name): string
    {
        return Text::toUrl($name);
    }
}
