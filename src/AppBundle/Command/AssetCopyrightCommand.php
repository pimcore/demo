<?php


namespace AppBundle\Command;


use Pimcore\Console\AbstractCommand;
use Pimcore\Model\Asset;
use function Sabre\VObject\write;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AssetCopyrightCommand extends AbstractCommand
{

    public function configure()
    {
        $this->setName("app:asset-copyright");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {

        $assets = new Asset\Listing();
        //$assets->setCondition('id = 219');

        foreach($assets as $asset) {

            $output->write("Processing asset " . $asset->getId() . "...");

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
                $asset->addMetadata('copyright', 'input', implode(" | ", $parts));
                $asset->save();
            }

            $output->writeln("...done");
        }
    }

}