<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Car.php';
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle(vehicle $objet): string
    {
        if($objet instanceof Bicycle){
            $this->setCurrentVehicle($objet);
        }
        return "added";
    }
}