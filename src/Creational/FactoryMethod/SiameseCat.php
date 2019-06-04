<?php


namespace App\Creational\FactoryMethod;


class SiameseCat implements CatInterface
{
    public function miaow()
    {
        return 'Miaow!';
    }

    public function look()
    {
        return 'looking good';
    }

}