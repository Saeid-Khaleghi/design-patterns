<?php

namespace Modules\ChainOfResponsibility\Entities;

class Client
{
    private $handler;

    public function __construct(Handler $handler)
    {
        $this->handler = $handler;
    }

    public function handle(Request $request)
    {
        $this->handler->handle($request);
    }
}
