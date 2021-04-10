<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    protected int $stockCapacity;

    protected int $load = 0;



    public function __construct(string $color, int $nbSeats, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->stockCapacity = $stockCapacity;
    }


    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad ($load): void
    {
        $this->load = $load;
    }

    public function getStockCapacity ($stockCapacity): int
    {
        return $this->stockCapacity;
    }

    public function setStockCapacity ($stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }


    public function full(){
        if ($this->getStockCapacity() > 0){
            echo "in filling";
        }elseif ($this->getStockCapacity() <= 0){
            echo "fuuuull";
        }
    }
}