<?php


namespace App\Tests\Behavioral\ChainOfResponsibilities;


use App\Behavioral\ChainOfResponsibilities\ColorPicker;
use App\Behavioral\ChainOfResponsibilities\Responsible\BlueDetector;
use App\Behavioral\ChainOfResponsibilities\Responsible\GreenDetector;
use App\Behavioral\ChainOfResponsibilities\Responsible\RedDetector;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilitiesTest extends TestCase
{
    public function testColorDetection()
    {
        $colorDetector = new RedDetector();
        $colorDetector
            ->setNext(new GreenDetector())
            ->setNext(new BlueDetector());

        $colorPicker = new ColorPicker('blue');

        $this->assertEquals('Blue color detected!', $colorDetector->handle($colorPicker));
    }
}