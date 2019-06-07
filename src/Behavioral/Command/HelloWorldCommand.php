<?php


namespace App\Behavioral\Command;


class HelloWorldCommand implements CommandInterface
{
    /** @var Receiver */
    private $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute(): void
    {
        $this->receiver->write('Hello World!');
    }
}