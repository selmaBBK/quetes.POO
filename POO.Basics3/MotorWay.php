<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Car.php';
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;


    public function addVehicle(vehicle $objet): string
    {
        if($objet instanceof Car){
            $this->setCurrentVehicles((array)$objet);
        }
        return "added";
    }

}