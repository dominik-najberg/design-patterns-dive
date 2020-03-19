<?php


namespace App\Structural\Composite;


use SplObjectStorage;

class Menu extends Component
{
    /** @var SplObjectStorage */
    protected $children;

    public function __construct()
    {
        $this->children = new SplObjectStorage;
    }

    public function add(Component $component): void
    {
        $this->children->attach($component);
        $component->parent = $this;
    }

    public function remove(Component $component): void
    {
        $this->children->detach($component);
        $component->parent = null;
    }

    public function isComposite(): bool
    {
        return true;
    }

    public function execute(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->execute();
        }

        return "Branch(" . implode("+", $results) . ")";
    }
}