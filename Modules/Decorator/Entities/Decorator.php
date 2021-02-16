<?php

namespace Modules\Decorator\Entities;

abstract class Decorator implements Component
{
    protected $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    abstract public function operation();
}
