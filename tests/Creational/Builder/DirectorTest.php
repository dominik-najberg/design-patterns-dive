<?php


namespace App\Tests\Creational\Builder;


use App\Creational\Builder\AirplaneTicketBuilder;
use App\Creational\Builder\BusTicketBuilder;
use App\Creational\Builder\Director;
use App\Creational\Builder\Parts\AirplaneTicket;
use App\Creational\Builder\Parts\BusTicket;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    /** @var Director */
    private $director;

    public function testCanCreateBusTicket()
    {
        $ticket = $this->director->build(new BusTicketBuilder());

        $this->assertInstanceOf(BusTicket::class, $ticket);
        $this->assertEquals('I am a bus ticket', $ticket->getDescription());
    }

    public function testCanCreateAirplaneTicket()
    {
        $ticket = $this->director->build(new AirplaneTicketBuilder());

        $this->assertInstanceOf(AirplaneTicket::class, $ticket);
        $this->assertEquals('I am an airplane ticket', $ticket->getDescription());
    }

    protected function setUp()
    {
        $this->director = new Director();
    }
}