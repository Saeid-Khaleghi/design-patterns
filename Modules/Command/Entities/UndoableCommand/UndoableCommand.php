<?php

namespace Modules\Command\Entities\UndoableCommand;

use Modules\Command\Entities\Command;

interface UndoableCommand extends Command
{
    public function unexecute();
}
