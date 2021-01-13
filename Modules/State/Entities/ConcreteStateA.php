<?php

namespace Modules\State\Entities;

class ConcreteStateA implements State
{
    public function handle()
    {
        return "Action A"."<br>";
    }
}
