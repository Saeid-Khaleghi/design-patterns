<?php

namespace Modules\Proxy\Entities;

class RealSubject implements Subject
{
    public function __construct()
    {
        echo 'Load the subject' .'<br>';
    }

    public function operation()
    {
        return "Do operation";
    }
}
