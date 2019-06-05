<?php


namespace App\Structural\Decorator;


class ExtraCheese extends PizzaDecorator
{
    const PRICE = 10;
    const DESCRIPTION = ' with extra cheese';

    public function getDescription(): string
    {
        return $this->pizza->getDescription().self::DESCRIPTION;
    }

    public function calculatePrice(): int
    {
        return $this->pizza->calculatePrice() + self::PRICE;
    }
}