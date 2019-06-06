<?php


namespace App\Behavioral\Strategy;


final class Calculator
{
    /** @var StrategyInterface */
    private $strategy;

    public function calculate($x, $operation, $y)
    {
        switch ($operation) {
            case '+':
                $this->setStrategy(new AdditionOperation());
                break;
            case '-':
                $this->setStrategy(new SubtractionOperation());
                break;
            case '*':
                $this->setStrategy(new MultiplicationOperation());
                break;
            case '/':
                $this->setStrategy(new DivisionOperation());
                break;
            default:
                throw new ArithmeticError('Operation unsupported');
        }

        return $this->strategy->doCalculate($x, $y);
    }

    public function setStrategy(StrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }
}