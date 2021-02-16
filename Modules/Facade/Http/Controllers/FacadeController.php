<?php

namespace Modules\Facade\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Facade\Entities\Client2;
use Modules\Facade\Entities\Client1;
use Illuminate\Contracts\Support\Renderable;

class FacadeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $client1 = new Client1();
        echo $client1->request();

        echo '<br><br>';

        $client2 = new Client2();
        echo $client2->request();
    }

}
