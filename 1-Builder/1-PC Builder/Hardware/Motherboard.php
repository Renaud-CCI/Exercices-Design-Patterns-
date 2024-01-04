<?php

namespace App\Builder\Hardware;

use App\Builder\Parts\AbstractPart;

class Motherboard extends AbstractPart
{
    public function __construct(string $chipset)
    {
        parent::__construct($chipset);
    }
}