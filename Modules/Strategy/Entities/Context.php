<?php

namespace Modules\Strategy\Entities;

class Context
{
    public function operation(Strategy $strategy)
    {
        return $strategy->algorithm();
    }
}
