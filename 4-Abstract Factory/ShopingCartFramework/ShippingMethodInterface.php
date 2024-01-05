<?php

namespace App\ShopingCartFramework;

interface ShippingMethodInterface {
  public function getName();
  public function getCostEstimate($miles, ProductInterface $product);
}