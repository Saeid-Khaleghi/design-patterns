<?php

namespace Modules\MediatorObserver\Entities;

abstract class Colleague
{
    private $observers = [];

    public function attach(Observer $observer){
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer){
        array_pop($this->observers);
    }

    protected function notify(){
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}
