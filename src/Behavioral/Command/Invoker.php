<?php


namespace App\Behavioral\Command;


class Invoker
{
    /** @var CommandInterface */
    private $command;

    public function setCommand(CommandInterface $command): void
    {
        $this->command = $command;
    }

    public function run(): void
    {
        $this->command->execute();
    }
}