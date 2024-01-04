<?php

namespace App;
use App\Interfaces\CalculationInterface;

abstract class OperationFactory
{
    public abstract function create(): CalculationInterface;
}