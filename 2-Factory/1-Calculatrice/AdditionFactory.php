<?php

namespace App;

use App\Interfaces\CalculationInterface;

class AdditionFactory extends OperationFactory
{
    public function create(): CalculationInterface
    {
        return new AdditionCalculation();
    }
}