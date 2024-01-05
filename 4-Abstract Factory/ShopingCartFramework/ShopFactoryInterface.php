<?php

namespace App\ShopingCartFramework;

interface ShopFactoryInterface {
  public function createProduct($productCode);
  public function createShippingMethod($name);
}