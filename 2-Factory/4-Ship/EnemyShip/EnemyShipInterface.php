<?php

namespace App\EnemyShip;

use App\HeroShip\HeroShipInterface;

interface EnemyShipInterface {
    public function attack(HeroShipInterface $ship);
    public function getName();
}