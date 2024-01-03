<?php

namespace App\Builder\Hardware;

use App\Builder\Parts\Storage;

class Ssd extends Storage
{
    public function __construct(string $volume)
    {
        parent::__construct($volume);
    }
}
