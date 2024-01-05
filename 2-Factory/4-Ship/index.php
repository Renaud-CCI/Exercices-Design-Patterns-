<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Factory\EnemyShipFactory;
use App\HeroShip\HeroShip;

$remainingPointsHeroShip = $_POST['remainingPointsHeroShip'] ?? 200;
$heroShip = new HeroShip(intval($remainingPointsHeroShip));

if (isset($_POST['ship'])) {
    $enemyShip = EnemyShipFactory::build($_POST['ship']);
    $enemyShip->attack($heroShip);
}


?>
<html>
    <head>
        <title>ShipWar</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" placeholder="Choose your ship, E/R/U/B" name="ship" />
            <input type="hidden" name="remainingPointsHeroShip" value="<?= $heroShip->getPoints() ?>"/>
            <button type="submit">Envoyer</button>
        </form>
        <p><?php if(isset($_POST['ship'])): ?>
            You've been hit by <?= $enemyShip->getName() ?>
            <?php endif; ?>
        </p>
        <p>
            You still have <?= $heroShip->getPoints() ?>
        </p>
    </body>
</html>
