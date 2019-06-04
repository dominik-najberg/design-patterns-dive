<?php


namespace App\Creational\Builder\Parts;


class BusTicket extends AbstractTicket implements TicketInterface
{
    public function getDescription(): string
    {
        return 'I am a bus ticket';
    }
}