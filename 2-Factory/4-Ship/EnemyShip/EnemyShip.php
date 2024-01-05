<?php

namespace App\EnemyShip;

use App\HeroShip\HeroShipInterface;

class EnemyShip implements EnemyShipInterface {
  public function attack(HeroShipInterface $ship) {
      $ship->takeDamage(10);
  }

  public function getName() {
      return 'an enemy ship';
  }
}