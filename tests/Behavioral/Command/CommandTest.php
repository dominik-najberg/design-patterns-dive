<?php


namespace App\Tests\Behavioral\Command;

/*
 * Smells like an integration test
 */

use App\Behavioral\Command\HelloWorldCommand;
use App\Behavioral\Command\Invoker;
use App\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommandExecution()
    {
        $receiver = new Receiver();

        $invoker = new Invoker();
        $command = new HelloWorldCommand($receiver);

        $invoker->setCommand($command);
        $invoker->run();

        $this->assertEquals('Hello World!', $receiver->getOutput());
    }
}