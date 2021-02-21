<?php

namespace Modules\Bridge\Entities;

abstract class Abstraction
{
    protected $implementor;

    public function __construct(Implementor $implementor)
    {
        $this->implementor = $implementor;
    }

    public abstract function operation();
}
