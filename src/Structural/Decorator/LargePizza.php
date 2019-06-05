<?php


namespace App\Structural\Decorator;


class LargePizza implements PizzaInterface
{
    public function calculatePrice(): int
    {
        return 40;
    }

    public function getDescription(): string
    {
        return 'Large pizza';
    }
}