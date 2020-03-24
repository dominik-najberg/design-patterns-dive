<?php


namespace App\Creational\FactoryMethod;


class SiameseCat implements CatInterface
{
    public function miaow(): string
    {
        return 'Miaow!';
    }

    public function look(): string
    {
        return 'looking good';
    }

}