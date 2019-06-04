<?php


namespace App\Creational\Builder\Parts;


class AirplaneTicket extends AbstractTicket implements TicketInterface
{
    public function getDescription(): string
    {
        return 'I am an airplane ticket';
    }

}