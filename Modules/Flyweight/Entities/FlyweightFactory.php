<?php

namespace Modules\Flyweight\Entities;

class FlyweightFactory
{
    // It can be a CACHE, File, ...
    private $flyweights = [];

    public function getFlyweight($key)
    {
        if(!isset($this->flyweights[$key])) {
            $this->flyweights[$key] = new ConcreteFlyweight($key);
        }
        return $this->flyweights[$key];
    }

    public function count()
    {
        return count($this->flyweights);
    }
}
