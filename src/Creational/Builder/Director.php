<?php


namespace App\Creational\Builder;


use App\Creational\Builder\Parts\AbstractTicket;

class Director
{
    public function build(BuilderInterface $builder): AbstractTicket
    {
        $builder->createTicket();
        $builder->addTransport();
        $builder->addTransportNumber();
        $builder->addSeatNumber();
        $builder->addGate();
        $builder->addBaggageInstructions();

        return $builder->getTicket();
    }
}