<?php


namespace App\Behavioral\Strategy;


class AdditionOperation implements StrategyInterface
{
    public function doCalculate($x, $y)
    {
        return $x + $y;
    }
}