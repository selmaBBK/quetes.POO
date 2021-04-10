<?php

class Car
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats;

    private int $nbWheels;

    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string {
        return "I'm started";
    }

    //getters

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


}
