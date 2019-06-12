<?php


namespace App\Behavioral\Strategy;


use ArithmeticError;

final class Calculator
{
    /** @var StrategyInterface[] */
    private $strategies;

    public function calculate($x, $operation, $y)
    {
        if (!isset($this->strategies[$operation])) {
                throw new ArithmeticError('Operation unsupported');
        }

        return $this->strategies[$operation]->doCalculate($x, $y);
    }

    public function addStrategy(StrategyInterface $strategy): void
    {
        $this->strategies[$strategy->getName()] = $strategy;
    }
}