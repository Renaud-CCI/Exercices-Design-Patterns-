<?php

namespace App\MyCompanyShop;

use App\ShopingCartFramework\ProductInterface;
use App\ShopingCartFramework\ShippingMethodInterface;


class MyShippingMethod implements ShippingMethodInterface {
  protected $name;
  protected $costPerMile;
  protected $costPerWeight;

  public function __construct($name, $costPerMile, $costPerWeight) {
      $this->name = $name;
      $this->costPerMile = $costPerMile;
      $this->costPerWeight = $costPerWeight;
  }

  public function getName() {
      return $this->name;
  }

  public function getCostEstimate($miles, ProductInterface $product) {
      return $miles * $this->costPerMile + $product->getWeight() * $this->costPerWeight;
  }
}