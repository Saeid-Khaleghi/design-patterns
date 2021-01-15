<?php

namespace Modules\Observer\Entities;

abstract class Subject
{
    private $observers;

    public function attach(Observer $observer){
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer){
        array_pop($this->observers);
    }

    public function notify(){
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

}
