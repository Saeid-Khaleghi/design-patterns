<?php

namespace Modules\Proxy\Http\Controllers;

use Modules\Proxy\Entities\Proxy;
use Illuminate\Routing\Controller;

class ProxyController extends Controller
{
    public function index()
    {
        $a = new Proxy();

        return $a->operation();
    }
}
