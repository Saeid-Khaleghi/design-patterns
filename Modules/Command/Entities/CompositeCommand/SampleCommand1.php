<?php

namespace Modules\Command\Entities\CompositeCommand;

use Modules\Command\Entities\Command;

class SampleCommand1 implements Command
{
    public function execute()
    {
        return "Do actions of sample command 1";
    }
}
