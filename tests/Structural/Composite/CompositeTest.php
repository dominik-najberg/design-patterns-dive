<?php


namespace App\Tests\Structural\Composite;


use App\Structural\Composite\Menu;
use App\Structural\Composite\MenuItem;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testCanBuildMenuWithItems(): void
    {
        $menu = new Menu();
        $menu->add(new MenuItem());
        $menu->add(new MenuItem());

        $subMenu = new Menu();
        $subMenu->add(new MenuItem());
        $subMenu->add(new MenuItem());
        $subMenu->add(new MenuItem());

        $menu->add($subMenu);

        $expected = 'Branch(Leaf+Leaf+Branch(Leaf+Leaf+Leaf))';
        $actual = $menu->execute();

        $this->assertEquals($expected, $actual);
    }
}