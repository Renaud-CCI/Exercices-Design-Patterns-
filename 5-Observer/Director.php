<?php
namespace App;

require_once __DIR__ . '/../vendor/autoload.php';

class Director{
 public function run(){
   // Object creation/generation
   $fuelSensor = new FuelSensor();
   $pressureSensor = new PressureSensor();
   $fuelTankWarning = new FuelTankWarning();
   $pressureWarnig = new PressureWarning();
   $fuelDisplay = new FuelDisplay();


   // Our FuelSensor extends Observeable and handles the Observers
   $fuelSensor->addObserver($fuelTankWarning);
   $fuelSensor->addObserver($fuelDisplay);
   $pressureSensor->addObserver($pressureWarnig);


   // The Observers are triggered by a value change
   $fuelSensor->setFuelLevel(80);
   $fuelSensor->setFuelLevel(10);
   $fuelSensor->setFuelLevel(5);
   $fuelSensor->setFuelLevel(1);
   $fuelSensor->setFuelLevel(100);


   // uncommend to throw Exception
   //$fuelSensor->setFuelLevel(101);

   // Adjust the pressure
   $pressureSensor->setPressure(3);
   $pressureSensor->setPressure(2.6);
   $pressureSensor->setPressure(1);

   // Removing Observer when they are not needed anymore
   $fuelSensor->removeObserver($fuelTankWarning);
   $fuelSensor->removeObserver($fuelDisplay);
   $pressureSensor->removeObserver($pressureWarnig);
   
 }
}
/*TODO lancer la méthode run du Director*/
$director = new Director();
$director->run();
