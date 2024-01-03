<?php

namespace App\Builder\Hardware;

use App\Builder\Parts\Storage;

class Hdd extends Storage
{
    public function __construct(string $volume)
    {
        parent::__construct($volume);
    }
}
