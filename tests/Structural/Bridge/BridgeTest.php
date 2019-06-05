<?php


namespace App\Tests\Structural\Bridge;


use App\Structural\Bridge\FunnyToner;
use App\Structural\Bridge\HelloCruelWorldPrinter;
use App\Structural\Bridge\PlainTextToner;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintWithDifferentToners()
    {
        $plainTextToner = new PlainTextToner();
        $printer = new HelloCruelWorldPrinter($plainTextToner);

        $expected = 'Hello, cruel world!';
        $this->assertEquals($expected, $printer->doPrint());

        $funnyToner = new FunnyToner();
        $printer->setImplementation($funnyToner);

        $expected = 'HA HA HA Hello, cruel world! HAHAHA :-))';
        $this->assertEquals($expected, $printer->doPrint());
    }
}