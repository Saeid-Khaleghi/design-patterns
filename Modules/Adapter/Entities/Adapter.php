<?php

namespace Modules\Adapter\Entities;

class Adapter implements Target
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function operation()
    {
        return $this->adaptee->specificOperation();
    }
}
