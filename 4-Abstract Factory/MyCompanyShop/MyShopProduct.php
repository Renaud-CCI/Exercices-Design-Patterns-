<?php

namespace App\MyCompanyShop;

use App\ShopingCartFramework\ProductInterface;

class MyShopProduct implements ProductInterface {
        protected $code;
        protected $description;
        protected $weight;

        public function __construct($code, $description, $weight) {
            $this->code = $code;
            $this->description = $description;
            $this->weight = $weight;
        }

        public function getShopProductCode() {
            return $this->code;
        }

        public function getShopDescription() {
            return $this->description;
        }

        public function getWeight() {
            return $this->weight;
        }
    }