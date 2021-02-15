<?php

namespace Modules\Composite\Entities;

class Leaf implements Component
{
    public function operation1()
    {
        echo 'Do operation 1'.'<br>';
    }

    public function operation2()
    {
        echo 'Do operation 2'.'<br>';
    }
}
