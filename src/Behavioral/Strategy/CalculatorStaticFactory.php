<?php


namespace App\Behavioral\Strategy;


class CalculatorStaticFactory
{
    public static function create(): Calculator
    {
        $calculator = new Calculator();
        $calculator->addStrategy(new AdditionOperation());
        $calculator->addStrategy(new SubtractionOperation());
        $calculator->addStrategy(new MultiplicationOperation());
        $calculator->addStrategy(new DivisionOperation());

        return $calculator;
    }
}