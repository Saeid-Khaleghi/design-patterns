<?php

namespace Modules\Command\Entities;

class ConcreteCommand implements Command
{
    private $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->action();
    }
}
