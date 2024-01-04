<?php

namespace App\Interfaces;

interface CalculationInterface
{
    public function calculationType(): CalculationInterface;

    public function calculate(float $a, float $b): float;
}