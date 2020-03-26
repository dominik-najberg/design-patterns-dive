<?php

namespace App\Tests\Creational\NamedConstructor;

use App\Creational\NamedConstructor\BadCatException;
use App\Creational\NamedConstructor\Cat;
use PHPUnit\Framework\TestCase;

class CatTest extends TestCase
{
    public function testCreate(): void
    {
        $cat = Cat::create('Handsome Cutie', 'brown');
        self::assertEquals('Handsome Cutie', $cat->getName());
        self::assertEquals('brown', $cat->getColour());
    }

    public function testTooShortNameThrowsException(): void
    {
        $this->expectException(BadCatException::class);
        $cat = Cat::create('Nils', 'balls');
    }
}
