<?php


namespace App\Creational\FactoryMethod;


class OntarioCatastrophy extends AbstractCatastrophy
{
    public function breedCat(): CatInterface
    {
        return new SphynxCat();
    }
}