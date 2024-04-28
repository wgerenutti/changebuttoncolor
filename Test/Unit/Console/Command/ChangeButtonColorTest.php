<?php

namespace Wgerenutti\ChangeColorButton\Test\Unit\Console\Command;

use PHPUnit\Framework\TestCase;
use Wgerenutti\ChangeColorButton\Console\Command\ChangeButtonColor;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\Cache\TypeListInterface;
use Symfony\Component\Console\Tester\CommandTester;

class ChangeButtonColorTest extends TestCase
{
    private $configWriter;
    private $cacheTypeList;
    private $command;

    protected function setUp(): void
    {
        $this->configWriter = $this->createMock(WriterInterface::class);
        $this->cacheTypeList = $this->createMock(TypeListInterface::class);

        $this->command = new ChangeButtonColor($this->configWriter, $this->cacheTypeList);
    }

    public function testExecute()
    {
        $this->configWriter->expects($this->once())
            ->method('save')
            ->with('design/button/color', '#000000', 'stores', 1);

        $this->cacheTypeList->expects($this->once())
            ->method('cleanType')
            ->with('config');

        $tester = new CommandTester($this->command);
        $tester->execute([
            'store_view' => 1,
            'color' => '#000000'
        ]);

        $this->assertEquals('<info>Button color changed successfully.</info>', trim($tester->getDisplay()));
    }
}
