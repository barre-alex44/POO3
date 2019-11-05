<?php


abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles;
    /**
     * @var int
     */
    protected $nbLane;
    /**
     * @var int
     */
    protected $maxSpeed;

    abstract protected function addVehicule(Vehicle $vehicle);

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(Vehicle $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane()
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

}