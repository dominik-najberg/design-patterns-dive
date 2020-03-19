<?php


namespace App\Structural\Composite;


class MenuItem extends Component
{
    public function execute(): string
    {
        return "Leaf";
    }
}