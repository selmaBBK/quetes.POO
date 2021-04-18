<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Car.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

// POO 4
$car = new Car();
$car->setParkBrake(1)

        try {
    echo $car->start();
        }
        catch(Exception $e) {
      $car->setParkBrake(0);
    echo "exception done";
    }
        finally {
    echo "Ma voiture roule comme un donut";
            }

