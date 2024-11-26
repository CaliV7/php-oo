<?php

require_once 'Bicycle.php';
require_once 'Car.php';

/* exemple
$bike->color = 'blue';
$bike->currentSpeed = 0;
var_dump($bike); 

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

var_dump($bike);
$bike->dump();*/

// Moving car
$marge = new Car('orange', 7, 'essence');
echo $marge->start();
echo ' --> Marge a démarré la voiture'. '<br>';
echo $marge->forward();
echo ' --> Elle avance'. '<br>';
echo $marge->brake();
echo ' --> Elle freine'. '<br>';
