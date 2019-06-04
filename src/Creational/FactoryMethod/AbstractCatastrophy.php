<?php


namespace App\Creational\FactoryMethod;


abstract class AbstractCatastrophy
{
    public function breedAndGo()
    {
        $cat = $this->breedCat();

        return 'My cat came to me and said "'.$cat->miaow().'". My cat is '.$cat->look().'.';
    }

    abstract public function breedCat(): CatInterface;
}