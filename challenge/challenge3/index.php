<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

//1
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

//2
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck(300, 'purple', 3, 'fuel');
echo $truck->forward();
echo $truck->brake();
echo $truck->checkCapacity();

//3

$tesla = new Car('black', 4, 'electric');
$ferrari = new Car('red', 2, 'fuel');
$schoolBus = new Truck(120, 'yellow', 40,'fuel');
