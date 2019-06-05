<?php


namespace App\Structural\Bridge;


class MerryChristmasPrinter extends AbstractPrinter
{
    public function doPrint(): string
    {
        return $this->implementation->format('Merry Christmas!');
    }
}