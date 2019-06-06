<?php


namespace App\Behavioral\Strategy;


class MultiplicationOperation implements StrategyInterface
{
    public function doCalculate($x, $y)
    {
        return $x * $y;
    }
}