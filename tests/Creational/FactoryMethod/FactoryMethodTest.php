<?php


namespace App\Tests\Creational\FactoryMethod;


use App\Creational\FactoryMethod\AbstractCatastrophy;
use App\Creational\FactoryMethod\AsianCatastrophy;
use App\Creational\FactoryMethod\OntarioCatastrophy;
use App\Creational\FactoryMethod\SiameseCat;
use App\Creational\FactoryMethod\SphynxCat;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateSiameseCat()
    {
        $catBreeding = new AsianCatastrophy();
        $kitten = $catBreeding->breedCat();

        $this->assertInstanceOf(SiameseCat::class, $kitten);
    }

    public function testCanCreateSpynxCat()
    {
        $catBreeding = new OntarioCatastrophy();
        $kitten = $catBreeding->breedCat();

        $this->assertInstanceOf(SphynxCat::class, $kitten);
    }

    /**
     * @dataProvider canMewAndLookDataProvider
     */
    public function testCanMeowAndLook(AbstractCatastrophy $catBreeding, $expected)
    {
        $actual = $catBreeding->breedAndGo();
        $this->assertEquals($expected, $actual);
    }

    public function canMewAndLookDataProvider()
    {
        return [
            [new AsianCatastrophy(), 'My cat came to me and said "Miaow!". My cat is looking good.'],
            [new OntarioCatastrophy(), 'My cat came to me and said "Squeek!". My cat is horribly beautiful.'],
        ];
    }
}