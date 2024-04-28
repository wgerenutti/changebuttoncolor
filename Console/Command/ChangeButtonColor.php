<?php

namespace Wgerenutti\ChangeColorButton\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\Cache\TypeListInterface;

class ChangeButtonColor extends Command
{
    const STORE_VIEW = 'store_view';
    const COLOR = 'color';

    protected $configWriter;
    protected $cacheTypeList;

    public function __construct(
        WriterInterface $configWriter,
        TypeListInterface $cacheTypeList,
        string $name = null
    ) {
        parent::__construct($name);
        $this->configWriter = $configWriter;
        $this->cacheTypeList = $cacheTypeList;
    }

    protected function configure()
    {
        $this->setName('wgerenutti:change-button-color')
            ->setDescription('Change the color of buttons for a specific store view')
            ->addArgument(
                self::STORE_VIEW,
                InputArgument::REQUIRED,
                'Store View ID'
            )
            ->addArgument(
                self::COLOR,
                InputArgument::REQUIRED,
                'HEX Color Code'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $storeViewId = $input->getArgument(self::STORE_VIEW);
        $color = $input->getArgument(self::COLOR);

        $this->configWriter->save('design/button/color', $color, 'stores', $storeViewId);

        $this->cacheTypeList->cleanType('config');

        $output->writeln('<info>Button color changed successfully.</info>');
    }
}
