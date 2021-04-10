<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Car.php';
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicle(vehicle $objet): string
    {
            $this->setCurrentVehicle($objet);
            return "added";

    }

}