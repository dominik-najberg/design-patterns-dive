<?php


namespace App\Tests\Structural\Decorator;


use App\Structural\Decorator\ExtraCheese;
use App\Structural\Decorator\LargePizza;
use App\Structural\Decorator\ThickCrust;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCanDeliverRegularPizza()
    {
        $pizza = new LargePizza();

        $this->assertEquals(40, $pizza->calculatePrice());
        $this->assertEquals('Large pizza', $pizza->getDescription());
    }

    public function testCanDeliverRegularPizzaWithExtraCheese()
    {
        $pizza = new LargePizza();
        $pizza = new ExtraCheese($pizza);

        $this->assertEquals(40 + 10, $pizza->calculatePrice());
        $this->assertEquals('Large pizza with extra cheese', $pizza->getDescription());
    }

    public function testCanDeliverRegularPizzaWithExtraCheeseOnThickCrust()
    {
        $pizza = new LargePizza();
        $pizza = new ExtraCheese($pizza);
        $pizza = new ThickCrust($pizza);

        $this->assertEquals(40 + 10 + 20, $pizza->calculatePrice());
        $this->assertEquals('Large pizza with extra cheese on thick crust', $pizza->getDescription());
    }


}