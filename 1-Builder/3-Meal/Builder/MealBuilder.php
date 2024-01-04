<?php

namespace App\Builder;

use App\Builder\Interfaces\MealBuilderInterface;
use App\Builder\Interfaces\MenuInterface;
use App\Builder\Items\AbstractItem;

class MealBuilder implements MealBuilderInterface
{
  /**
   * @var AbstractItem[]
   */
  private $components = [];

  /**
   * @param AbstractItem $part
   * @return MealBuilderInterface
   */
  public function setItem(AbstractItem $item): MealBuilderInterface
  {
      $this->components[$item::class] = $item;
      return $this;
  }

  /**
   * @return MenuInterface
   */
  public function getMenu(): MenuInterface
  {
      return new Menu($this->components);
  }

  public function eraseMenu(): MealBuilderInterface
  {
      $this->components = [];
      return $this;

  }
}