<?php


namespace App\Creational\AbstractFactory;


class HumanFactory
{
    public const ADULT_AGE = 21;

    public function createYoungHuman(): YoungHuman
    {
        return new YoungHuman();
    }

    public function createAdultHuman(): AdultHuman
    {
        return new AdultHuman(self::ADULT_AGE);
    }
}