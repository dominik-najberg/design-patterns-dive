<?php


namespace App\Creational\Builder;


use App\Creational\Builder\Parts\AbstractTicket;
use App\Creational\Builder\Parts\AirplaneTicket;
use App\Creational\Builder\Parts\BusTicket;
use App\Creational\Builder\Parts\Characteristic;

class AirplaneTicketBuilder implements BuilderInterface
{
    /** @var BusTicket */
    private $ticket;

    public function createTicket(): void
    {
        $this->ticket = new AirplaneTicket();
    }

    public function addTransport(): void
    {
        $this->ticket->setCharacteristic('transport', new Characteristic('transport', 'flight'));
    }

    public function addTransportNumber(): void
    {
        $this->ticket->setCharacteristic('transportNumber', new Characteristic('transportNumber', '1253'));
    }

    public function addSeatNumber(): void
    {
        $this->ticket->setCharacteristic('seatNumber', new Characteristic('seatNumber', '17C'));
    }

    public function addGate(): void
    {
        $this->ticket->setCharacteristic('gate', new Characteristic('gate', '10'));
    }

    public function addBaggageInstructions(): void
    {
        $this->ticket->setCharacteristic('baggage', new Characteristic('baggage', 'drop at the gate'));
    }

    public function getTicket(): AbstractTicket
    {
        return $this->ticket;
    }
}