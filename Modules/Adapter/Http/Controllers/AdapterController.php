<?php

namespace Modules\Adapter\Http\Controllers;

use Modules\Adapter\Entities\Client;
use Modules\Adapter\Entities\Adapter;
use Modules\Adapter\Entities\Adaptee;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdapterController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $client = new Client();

        return $client->request(new Adapter(new Adaptee()));
    }
}
