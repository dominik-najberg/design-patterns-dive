<?php


namespace App\Structural\Bridge;


class HelloCruelWorldPrinter extends AbstractPrinter
{
    public function doPrint(): string
    {
        return $this->implementation->format('Hello, cruel world!');
    }
}