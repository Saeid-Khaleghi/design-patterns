<?php

namespace Modules\ChainOfResponsibility\Entities;

abstract class Handler
{
    private $next;

    public function __construct(Handler $next = null)
    {
        $this->next = $next;
    }

    public function handle(Request $request) {
        if($this->handleRequest($request)) {
            return;
        }
        if($this->next != null) {
            $this->next->handle($request);
        }
    }

    public abstract function handleRequest(Request $request);
}
