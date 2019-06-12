<?php


namespace App\Behavioral\Strategy;


class SubtractionOperation implements StrategyInterface
{
    public function getName(): string
    {
        return '-';
    }

    public function doCalculate($x, $y)
    {
        return $x - $y;
    }
}