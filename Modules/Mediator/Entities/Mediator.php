<?php

namespace Modules\Mediator\Entities;

abstract class Mediator
{
    public abstract function mediate(Colleague $colleague);
}
