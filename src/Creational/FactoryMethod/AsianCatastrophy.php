<?php


namespace App\Creational\FactoryMethod;


class AsianCatastrophy extends AbstractCatastrophy
{
    public function breedCat(): CatInterface
    {
        return new SiameseCat();
    }
}