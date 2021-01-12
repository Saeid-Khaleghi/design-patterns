<?php

namespace Modules\Memento\Entities;

class CareTaker
{
    private $mementoList = [];

    /**
     * @param  \Modules\Memento\Entities\Memento  $memento
     */
    public function push(Memento $memento)
    {
        $this->mementoList[] = $memento;
    }

    /**
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->mementoList);
    }
}
