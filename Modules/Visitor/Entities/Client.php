<?php

namespace Modules\Visitor\Entities;

class Client
{
    private $elements = [];

    public function add(Element $element)
    {
        $this->elements[] =$element;
    }

    public function accept(Visitor $visitor)
    {
        foreach ($this->elements as $element) {
            $element->accept($visitor);
        }
    }
}
