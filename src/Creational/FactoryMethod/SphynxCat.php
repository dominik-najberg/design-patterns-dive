<?php


namespace App\Creational\FactoryMethod;


class SphynxCat implements CatInterface
{
    public function miaow()
    {
        return 'Squeek!';
    }

    public function look()
    {
        return 'horribly beautiful';
    }

}