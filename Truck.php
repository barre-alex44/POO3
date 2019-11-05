<?php

// Truck

require_once 'Vehicle.php';
class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     */
    private $energyLevel;
    /**
     * @var int
     */
    private $capacity;
    /**
     * @var string
     */
    private $capacityStatus;
    /**
     * @var
     */
    private $load;
    /**
     * Camion constructor.

     */
    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }
    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }
    /**
     * @param string $energy
     * @return Camion
     */
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }
    /**
     * @param int $capacity
     * @return Camion
     */
    public function setCapacity(int $capacity): Truck
    {
        $this->capacity = $capacity;
        return $this;
    }
    public function getLoad()
    {
        return $this->load;
    }
    public function setLoad(int $load): Truck
    {
        if ($load <= $this->capacity) {
            $this->load = $load;
            return $this;
        } elseif ($load > $this->capacity) {
            $this->load = $this->capacity;
            return $this;
        } elseif ($load < 0) {
            $this->load = 0;
            return $this;
        }
        return $this;
    }
    public function capacityStatus(): string
    {
        return ($this->capacity > $this->load) ? "in filling":"full";
    }
}