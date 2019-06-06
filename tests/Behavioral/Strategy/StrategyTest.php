<?php


namespace App\Tests\Behavioral\Strategy;


use App\Behavioral\Strategy\Calculator;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    const MATH_ADDITION = '+';
    const MATH_SUBTRACTION = '-';
    const MATH_MULTIPLICATION = '*';
    const MATH_DIVISION = '/';

    /**
     * @dataProvider calculationsDataProvider
     */
    public function testCalculatorWorks($x, $operation, $y, $expected)
    {
        $calculator = new Calculator();

        $this->assertEquals($expected, $calculator->calculate($x, $operation, $y));
    }

    public function calculationsDataProvider()
    {
        return [
            [2, self::MATH_ADDITION, 2, 4],
            [7, self::MATH_SUBTRACTION, 2, 5],
            [10, self::MATH_MULTIPLICATION, 10, 100],
            [20, self::MATH_DIVISION, 10, 2],
        ];
    }
}