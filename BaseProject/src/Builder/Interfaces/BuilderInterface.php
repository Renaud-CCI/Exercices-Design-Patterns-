<?php

namespace App\Builder\Interfaces;

use App\Builder\Parts\AbstractPart;
use App\Builder\Interfaces\ComputerInterface;


interface BuilderInterface
{
    /**
     * @param AbstractPart $part
     * @return BuilderInterface
     */
    public function setPart(AbstractPart $part): BuilderInterface;

    /**
     * @return ComputerInterface
     */
    public function getComputer(): ComputerInterface;
}