<?php


namespace App\Tests\Creational\AbstractFactory;


use App\Creational\AbstractFactory\AdultHuman;
use App\Creational\AbstractFactory\HumanFactory;
use App\Creational\AbstractFactory\YoungHuman;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    /** @var HumanFactory */
    private $humanFactory;

    public function testCanCreateYoungHuman()
    {
        $youngHuman = $this->humanFactory->createYoungHuman();

        $this->assertInstanceOf(YoungHuman::class, $youngHuman);
        $this->assertEquals('Hi. My name is Alex', $youngHuman->sayHello());
        $this->assertEquals(3, $youngHuman->getAge());
    }

    public function testCanCreateAdultHuman()
    {
        $adultHuman = $this->humanFactory->createAdultHuman();

        $this->assertInstanceOf(AdultHuman::class, $adultHuman);
        $this->assertEquals('Blah. Blah. Blah.', $adultHuman->sayHello());
        $this->assertEquals(21, $adultHuman->getAge());
    }

    protected function setUp()
    {
        $this->humanFactory = new HumanFactory();
    }
}