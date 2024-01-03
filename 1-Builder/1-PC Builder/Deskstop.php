<?php

namespace App\Builder;

use App\Builder\Interfaces\ComputerInterface;
use App\Builder\Parts\AbstractPart;

class Desktop implements ComputerInterface
{
  private $components;


  public function __construct(array $components)
  {
    $this->components = $components;
  }

  public function getComponent(string $part) : AbstractPart
  {
    return $this->components[$part::class];
  }
}