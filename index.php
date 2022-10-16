<?php

require_once 'class/Vehicle.php';

require_once 'class/Car.php';

require_once 'class/Bicycle.php';

require_once 'class/Trucks.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'Electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

$truck = new Trucks('black', 3, 120, 'Electric');

var_dump($truck);
var_dump($truck->isFilling(10));
