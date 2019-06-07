<?php


namespace App\Behavioral\Command;


class HelloWorldUndoableCommand implements UndoableCommand
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

    public function undo()
    {
        $this->receiver->write('No! I take that back!');
    }
}