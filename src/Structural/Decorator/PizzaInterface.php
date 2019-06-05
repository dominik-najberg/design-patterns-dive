<?php


namespace App\Structural\Decorator;


interface PizzaInterface
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}