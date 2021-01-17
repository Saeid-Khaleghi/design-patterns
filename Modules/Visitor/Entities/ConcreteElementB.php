<?php

namespace Modules\Visitor\Entities;

class ConcreteElementB implements Element
{
    public function accept($visitor)
    {
        $visitor->visitElementB($this);
    }
}
