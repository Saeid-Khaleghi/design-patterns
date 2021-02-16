<?php

namespace Modules\Adapter\Entities;

class Client
{
    public function request(Target $target)
    {
        return $target->operation();
    }
}
