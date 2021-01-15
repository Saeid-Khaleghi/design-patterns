<?php

namespace Modules\Observer\Entities;

class ConcreteObserver2 implements Observer
{
    private $subject;

    public function __construct(ConcreteSubject $subject)
    {
        $this->subject = $subject;
    }

    public function update()
    {
        echo "Observer 2 notified by this value: ".$this->subject->getState()."<br>";
    }
}
