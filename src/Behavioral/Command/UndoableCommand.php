<?php


namespace App\Behavioral\Command;


interface UndoableCommand extends CommandInterface
{
    public function undo();
}