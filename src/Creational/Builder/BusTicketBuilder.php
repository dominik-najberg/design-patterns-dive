<?php


namespace App\Creational\Builder;


use App\Creational\Builder\Parts\AbstractTicket;
use App\Creational\Builder\Parts\BusTicket;
use App\Creational\Builder\Parts\Characteristic;

class BusTicketBuilder implements BuilderInterface
{
    /** @var BusTicket */
    private $ticket;

    public function createTicket()
    {
        $this->ticket = new BusTicket();
    }

    public function addTransport()
    {
        $this->ticket->setCharacteristic('transport', new Characteristic('transport', 'bus'));
    }

    public function addTransportNumber()
    {
        $this->ticket->setCharacteristic('transportNumber', new Characteristic('transportNumber', '12'));
    }

    public function addSeatNumber()
    {
        $this->ticket->setCharacteristic('seatNumber', new Characteristic('seatNumber', '22A'));
    }

    public function addGate()
    {
    }

    public function addBaggageInstructions()
    {
    }

    public function getTicket(): AbstractTicket
    {
        return $this->ticket;
    }
}