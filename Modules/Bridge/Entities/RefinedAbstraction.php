<?php

namespace Modules\Bridge\Entities;

class RefinedAbstraction extends Abstraction
{
    public function operation()
    {
        return $this->implementor->implementation();
    }
}
