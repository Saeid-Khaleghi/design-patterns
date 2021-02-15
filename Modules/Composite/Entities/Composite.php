<?php

namespace Modules\Composite\Entities;

class Composite implements Component
{
    private $components = [];

    public function add(Component $component)
    {
        $this->components[] = $component;
    }

    public function operation1()
    {
        foreach ($this->components as $component) {
            $component->operation1();
        }
    }

    public function operation2()
    {
        foreach ($this->components as $component) {
            $component->operation2();
        }
    }
}
