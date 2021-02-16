<?php

namespace Modules\Decorator\Entities;

class ConcreteComponent implements Component
{
    public function operation()
    {
        echo 'Normal behavior'."<br>";
    }
}
