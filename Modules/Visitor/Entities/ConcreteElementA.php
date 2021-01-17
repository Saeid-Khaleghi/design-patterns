<?php

namespace Modules\Visitor\Entities;

class ConcreteElementA implements Element
{
    public function accept($visitor)
    {
        $visitor->visitElementA($this);
    }
}
