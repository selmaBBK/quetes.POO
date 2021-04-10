<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle(color: "red",
    currentSpeed: 5);
echo $bike->forward();
echo $bike->brake();



$fiat = new Car(color:'white',
    nbSeats: 4,
    energy: 100);
echo $fiat->forward();
echo $fiat->brake();















