<?php


namespace App\Creational\FactoryMethod;


class SphynxCat implements CatInterface
{
    public function miaow(): string
    {
        return 'Squeek!';
    }

    public function look(): string
    {
        return 'horribly beautiful';
    }

}