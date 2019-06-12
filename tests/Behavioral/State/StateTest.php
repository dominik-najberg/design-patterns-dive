<?php


namespace App\Tests\Behavioral\State;


use App\Behavioral\State\Door;
use App\Behavioral\State\DoorOpen;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testDoorCanBeClosed()
    {
        $door = new Door(new DoorOpen());

        $this->expectException(\Exception::class);
        $door->open();
        $this->assertFalse($door->isClosed());

        $door->lock();
        $this->assertFalse($door->isLocked());

        $door->close();
        $this->assertTrue($door->isClosed());
    }

    public function testDoorCanBeLocked()
    {
        $door = new Door(new DoorOpen());

        $this->expectException(\Exception::class);
        $door->lock();
        $this->assertFalse($door->isLocked());

        $door->close();
        $door->lock();

        $this->assertTrue($door->isLocked());
    }


}