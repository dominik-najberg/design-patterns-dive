<?php


namespace App\Structural\Decorator;


class ExtraCheese extends PizzaDecorator
{
    private const PRICE = 10;
    private const DESCRIPTION = ' with extra cheese';

    public function getDescription(): string
    {
        return $this->pizza->getDescription().self::DESCRIPTION;
    }

    public function calculatePrice(): int
    {
        return $this->pizza->calculatePrice() + self::PRICE;
    }
}