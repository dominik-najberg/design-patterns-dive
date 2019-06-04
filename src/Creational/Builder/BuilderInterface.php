<?php


namespace App\Creational\Builder;


use App\Creational\Builder\Parts\AbstractTicket;

interface BuilderInterface
{
    public function createTicket();

    public function addTransport();

    public function addTransportNumber();

    public function addSeatNumber();

    public function addGate();

    public function addBaggageInstructions();

    public function getTicket(): AbstractTicket;
}