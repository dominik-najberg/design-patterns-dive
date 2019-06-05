<?php


namespace App\Structural\Decorator;


class ThickCrust extends PizzaDecorator
{
    const PRICE = 20;
    const DESCRIPTION = ' on thick crust';

    public function getDescription(): string
    {
        return $this->pizza->getDescription().self::DESCRIPTION;
    }

    public function calculatePrice(): int
    {
        return $this->pizza->calculatePrice() + self::PRICE;
    }
}