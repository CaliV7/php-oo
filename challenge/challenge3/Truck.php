<?php

require_once 'Vehicle.php';

class Truck extends Vehicle{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private int $capacity;
    private int $stock = 0;
    private string $energy;
    private int $energyLevel;

    //La capacité de stockage doit être saisie au moment de l’Instanciation de l’objet, en plus de la couleur, du nombre de sièges et de l’énergie.
    public function __construct(int $capacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->capacity = $capacity;
        $this->setEnergy($energy);
    }

    //Il a également une méthode qui permet de savoir s’il est plein ou non.
    public function checkCapacity(): string
    {
        if($this->stock < $this->capacity) {
            return 'In filling';
        }

        return 'Full';
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getCapacity(): int 
    {
        return $this->capacity;
    }
    public function setCapacity($capacity): self
    {
        $this->capacity = $capacity;
        return $this;
    }

    public function getStock(): int 
    {
        return $this->stock;
    }
    public function setStock($stock): self
    {
        $this->stock = $stock;
        return $this;
    }
}