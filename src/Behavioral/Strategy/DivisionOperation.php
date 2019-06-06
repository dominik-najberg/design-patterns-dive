<?php


namespace App\Behavioral\Strategy;


class DivisionOperation implements StrategyInterface
{
    public function doCalculate($x, $y)
    {
        return $x / $y;
    }
}