<?php

namespace Modules\Flyweight\Http\Controllers;

use Modules\Flyweight\Entities\Client;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FlyweightController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $intrinsicStates = ['intrinsic1', 'intrinsic2', 'intrinsic3', 'intrinsic4', 'intrinsic5'];
        $extrinsicStates = ['extrinsic1', 'extrinsic2', 'extrinsic3', 'extrinsic4', 'extrinsic5'];

        $client = new Client();
        $client->addFlyweight($intrinsicStates[array_rand($intrinsicStates)], $extrinsicStates[array_rand($extrinsicStates)]);
        $client->addFlyweight($intrinsicStates[array_rand($intrinsicStates)], $extrinsicStates[array_rand($extrinsicStates)]);
        $client->addFlyweight($intrinsicStates[array_rand($intrinsicStates)], $extrinsicStates[array_rand($extrinsicStates)]);
        $client->addFlyweight($intrinsicStates[array_rand($intrinsicStates)], $extrinsicStates[array_rand($extrinsicStates)]);
        $client->addFlyweight($intrinsicStates[array_rand($intrinsicStates)], $extrinsicStates[array_rand($extrinsicStates)]);
        $client->addFlyweight($intrinsicStates[array_rand($intrinsicStates)], $extrinsicStates[array_rand($extrinsicStates)]);

        $client->service();

    }
}
