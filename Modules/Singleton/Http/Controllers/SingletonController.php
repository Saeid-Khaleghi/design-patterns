<?php

namespace Modules\Singleton\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Singleton\Entities\Singleton;

class SingletonController extends Controller
{
    public function index()
    {
        $singleton = Singleton::getInstance();
        return $singleton->operation();
    }

}
