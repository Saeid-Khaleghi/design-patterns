<?php

namespace Modules\State\Entities;

class ConcreteStateB implements State
{
    public function handle()
    {
        return "Action B"."<br>";
    }
}
