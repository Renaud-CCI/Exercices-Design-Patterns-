<?php

namespace App\Factory;

use App\EnemyShip\EnemyShipInterface;

interface ShipFactoryInterface {
    public static function build($shipType) : EnemyShipInterface;
}