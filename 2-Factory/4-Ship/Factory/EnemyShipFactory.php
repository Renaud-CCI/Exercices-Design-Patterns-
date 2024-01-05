<?php

namespace App\Factory;

use App\EnemyShip\BigUfoEnemyShip;
use App\EnemyShip\EnemyShip;
use App\EnemyShip\EnemyShipInterface;
use App\EnemyShip\RocketEnemyShip;
use App\EnemyShip\UfoEnemyShip;
use PHPUnit\Framework\Exception;

class EnemyShipFactory implements ShipFactoryInterface {
    public static function build($shipType) : EnemyShipInterface {
        switch ($shipType) {
            case 'E':
                return new EnemyShip();
            case 'R':
                return new RocketEnemyShip();
            case 'U':
                return new UfoEnemyShip();
            case 'B':
                return new BigUfoEnemyShip();
            default:
                throw new Exception("Unknown ship type: $shipType");
        }
    }
}