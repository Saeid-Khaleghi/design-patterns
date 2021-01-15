<?php

namespace Modules\Observer\Entities;

class ConcreteObserver1 implements Observer
{
    private $subject;

    public function __construct(ConcreteSubject $subject)
    {
        $this->subject = $subject;
    }

    public function update()
    {
        echo "Observer 1 notified successfully by this value: ".$this->subject->getState()."<br>";
    }
}
