<?php


namespace App\Tests\Structural\Adapter;


use App\Structural\Adapter\RoundHole;
use App\Structural\Adapter\RoundPeg;
use App\Structural\Adapter\SquarePeg;
use App\Structural\Adapter\SquarePegAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    const HOLE_RADIUS = 5;

    private $roundHole;

    public function testRoundHoleAndPegFit()
    {
        $smallRoundPeg = new RoundPeg(5);
        $largeRoundPeg = new RoundPeg(10);

        $this->assertEquals(true, $this->roundHole->fits($smallRoundPeg));
        $this->assertEquals(false, $this->roundHole->fits($largeRoundPeg));
    }

    public function testRoundHoleAndSquarePigFitWithAdapter()
    {
        $smallSquarePeg = new SquarePeg(5);
        $largeSquarePeg = new SquarePeg(10);

        $smallAdapter = new SquarePegAdapter($smallSquarePeg);
        $largeAdapter = new SquarePegAdapter($largeSquarePeg);

        $this->assertEquals(true, $this->roundHole->fits($smallAdapter));
        $this->assertEquals(false, $this->roundHole->fits($largeAdapter));
    }

    protected function setUp()
    {
        $this->roundHole = new RoundHole(self::HOLE_RADIUS);;
    }
}