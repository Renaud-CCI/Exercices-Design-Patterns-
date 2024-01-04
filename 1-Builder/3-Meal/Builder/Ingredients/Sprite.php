<?php

namespace App\Builder\Ingredients;

use App\Builder\Items\Drinks;

class Sprite extends Drinks
{
    public function __construct($drink)
    {
        parent::__construct($drink);
    }
}