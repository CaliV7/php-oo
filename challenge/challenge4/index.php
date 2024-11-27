<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';


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

//4

$car = new Car('blue', 5, 'electric');
try {
    $car->start();
}  catch(Exception $e) {
    echo $e->getMessage();
    echo '<br>Le frein à main doit être inactif. <br>';
    $car->setParkBrake(false);
    $msg = 'Le frein a main est ' . ($car->getParkBrake() ? 'actif' : 'innactif') ;
    echo $msg;
} finally {
    echo "<br>Ma voiture roule comme un donut.";
}