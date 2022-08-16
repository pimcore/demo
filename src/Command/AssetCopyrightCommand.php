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

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Model\Asset;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AssetCopyrightCommand extends AbstractCommand
{
    public function configure()
    {
        $this->setName('app:asset-copyright');
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $assets = new Asset\Listing();
        //$assets->setCondition('id = 219');

        foreach ($assets as $asset) {
            $output->write('Processing asset ' . $asset->getId() . '...');

            $parts = [];
            if ($asset->getMetadata('author')) {
                $authorString = $asset->getMetadata('author');

                if ($asset->getMetadata('authorLink')) {
                    $authorString .= ' (' . $asset->getMetadata('authorLink') . ')';
                }

                $parts[] = $authorString;
            }

            if ($asset->getMetadata('license')) {
                $parts[] = $asset->getMetadata('license');
            }

            if ($parts && empty($asset->getMetadata('copyright'))) {
                $output->write(' updating asset copyright ');
                $asset->addMetadata('copyright', 'input', implode(' | ', $parts));
                $asset->save();
            }

            $output->writeln('...done');
        }

        return 0;
    }
}
