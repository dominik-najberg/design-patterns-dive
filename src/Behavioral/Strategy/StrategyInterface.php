<?php


namespace App\Behavioral\Strategy;


interface StrategyInterface
{
    public function doCalculate($x, $y);

    public function getName(): string;
}