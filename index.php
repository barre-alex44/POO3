<?php

/**
 * require
 */
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'HighWay.php';


$truck = new Truck('blue', 3, 'electric', 200);
$monsterTruck = new Truck('green', 2, 'fuel', 80);
var_dump($truck);
var_dump($monsterTruck);


// moving super truck
echo $truck->forward();
echo $truck->brake();


// moving super truck
echo $monsterTruck->forward();
echo $monsterTruck->brake();


// Truck capacity set and check
$truck->setCapacity(20);
var_dump($truck);


echo $truck->capacityStatus();
$truck->setCapacity(0);
echo "<br>";
echo $truck->capacityStatus();


// Capacity
$monsterTruck->setCapacity(80);
var_dump($monsterTruck);
echo $monsterTruck->capacityStatus();
$monsterTruck->setLoad(80);
echo "<br>";
echo $monsterTruck->capacityStatus();

