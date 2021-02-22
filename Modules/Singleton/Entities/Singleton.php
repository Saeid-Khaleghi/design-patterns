<?php

namespace Modules\Singleton\Entities;

class Singleton
{
    private static $instance;

    private function __construct(){}

    public static function getInstance() {
        if(is_null(self::$instance)) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function operation()
    {
        return 'Do some operation';
    }
}
