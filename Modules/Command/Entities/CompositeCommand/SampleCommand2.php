<?php

namespace Modules\Command\Entities\CompositeCommand;

use Modules\Command\Entities\Command;

class SampleCommand2 implements Command
{
    public function execute()
    {
        return "Do action of sample command 2";
    }
}
