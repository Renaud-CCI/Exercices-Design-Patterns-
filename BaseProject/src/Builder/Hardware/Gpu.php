<?php

namespace App\Builder\Hardware;

use App\Builder\Parts\Processor;

class Gpu extends Processor
{
    public function __construct(string $processor)
    {
        parent::__construct($processor);
    }
}