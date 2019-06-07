<?php


namespace App\Tests\Behavioral\TemplateMethod;


use App\Behavioral\TemplateMethod\DearMomLetter;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testCanWriteToMom()
    {
        $letter = new DearMomLetter();

        $this->assertEquals($this->getExpectedLetter(), $letter->createLetter());
    }

    private function getExpectedLetter()
    {
        return "Dear Mom!\nI am thinking about you.\nI miss you so much!\nHope to see you soon!";
    }
}