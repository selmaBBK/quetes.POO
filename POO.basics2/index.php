<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


$truckRed = new Truck("red", 2, 150 );
$truckBlue = new Truck("blue", 3, 200 );

echo $truckRed->forward();
echo $truckRed->brake();

echo $truckBlue->forward();
echo $truckBlue->brake();
