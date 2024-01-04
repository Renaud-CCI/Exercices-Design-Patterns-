<?php

namespace App\Builder\Ingredients;

use App\Builder\Items\Burgers;

class Vege extends Burgers
{
    public function __construct($burger)
    {
        parent::__construct($burger);
    }
}