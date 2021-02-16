<?php

namespace Modules\Facade\Entities;

class Facade
{
    public function operation()
    {
        $package1 = new Package1();
        $package2 = new Package2();
        $package3 = new Package3();

        $result1 = $package1->operation1();
        $result2 = $package3->operation3();
        $result3 = $package2->operation2();

        return $result1.'<br>'.$result2.'<br>'.$result3;
    }
}
