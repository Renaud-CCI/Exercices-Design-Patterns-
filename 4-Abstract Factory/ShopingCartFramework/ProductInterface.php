<?php

namespace App\ShopingCartFramework;

interface ProductInterface {
  public function getShopProductCode();
  public function getShopDescription();

  public function getWeight();
}