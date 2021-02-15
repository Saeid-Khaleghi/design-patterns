<?php

namespace Modules\Composite\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Composite\Entities\Leaf;
use Modules\Composite\Entities\Composite;
use Illuminate\Contracts\Support\Renderable;

class CompositeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $composite1 = new Composite(); // Folder1
        $composite1->add(new Leaf());  // File1
        $composite1->add(new Leaf());  // File2

        $composite2 = new Composite(); // Folder2
        $composite2->add(new Leaf());  // File2
        $composite2->add(new Leaf());  // File2

        $composite = new Composite(); // TopFolder
        $composite->add($composite1); // Folder1
        $composite->add($composite1); // Folder2

        $composite->operation1(); // Move
        $composite->operation2(); // Delete
    }
}
