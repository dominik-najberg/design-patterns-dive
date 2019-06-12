<?php


namespace App\Behavioral\Strategy;


class CalculatorStaticFactory
{
    static public function create(): Calculator
    {
        $calculator = new Calculator();
        $calculator->addStrategy(new AdditionOperation());
        $calculator->addStrategy(new SubtractionOperation());
        $calculator->addStrategy(new MultiplicationOperation());
        $calculator->addStrategy(new DivisionOperation());

        return $calculator;
    }
}