<?php

namespace Modules\Proxy\Entities;

class Proxy implements Subject
{
    private $subject = null;

    public function operation()
    {
        if ($this->subject === null) {
            $this->subject = new RealSubject();
        }

        return $this->subject->operation();
    }
}
