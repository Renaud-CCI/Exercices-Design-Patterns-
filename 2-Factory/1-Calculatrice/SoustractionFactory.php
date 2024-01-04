<?php

namespace App;
use App\Interfaces\CalculationInterface;

class SoustractionFactory extends OperationFactory
{
    public function create(): CalculationInterface
    {
        return new SoustractionCalculation();
    }
}