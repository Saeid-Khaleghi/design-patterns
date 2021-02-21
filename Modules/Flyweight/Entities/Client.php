<?php

namespace Modules\Flyweight\Entities;

class Client
{
    private $flyweights;

    public function addFlyweight($intrinsicState, $extrinsicState)
    {
        $flyweight_factory = new FlyweightFactory();
        $flyweight = $flyweight_factory->getFlyweight($intrinsicState);
        $this->flyweights[] = $flyweight->operation($extrinsicState);
    }

    public function service()
    {
        foreach ($this->flyweights as $flyweight) {
            echo $flyweight."<br>";
        }
    }
}
