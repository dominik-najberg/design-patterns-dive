<?php


namespace App\Structural\Decorator;


abstract class PizzaDecorator implements PizzaInterface
{
    /** @var PizzaInterface */
    protected $pizza;

    public function __construct(PizzaInterface $pizza)
    {
        $this->pizza = $pizza;
    }
}