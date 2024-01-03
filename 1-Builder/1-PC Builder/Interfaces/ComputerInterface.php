<?php

namespace App\Builder\Interfaces;

use App\Builder\Parts\AbstractPart;

interface ComputerInterface
{
    /**
     * @return array
     */
    public function getComponent(string $part): AbstractPart;
}