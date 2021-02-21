<?php

namespace Modules\Flyweight\Entities;

class ConcreteFlyweight implements Flyweight
{
    private $intrinsicState;

    public function __construct($intrinsicState)
    {
        $this->intrinsicState = $intrinsicState;
    }

    public function operation($extrinsicState)
    {
        return 'Operation on '.$this->intrinsicState.' and '.$extrinsicState;
    }
}
