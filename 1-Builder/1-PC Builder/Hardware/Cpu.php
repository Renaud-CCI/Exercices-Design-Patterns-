<?php

namespace App\Builder\Hardware;

use App\Builder\Parts\Processor;

class Cpu extends Processor
{
    public function __construct(string $processor)
    {
        parent::__construct($processor);
    }
}
