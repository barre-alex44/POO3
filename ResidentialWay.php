<?php


require_once "HighWay.php";
final class ResidentialWay extends HighWay
{
    protected $currentVehicles;
    public function addVehicule($vehicle)
    {
        $this->setCurrentVehicles($vehicle);
    }
    public function __construct()
    {
        $this->setNbLane(2);
        $this->setMaxSpeed(50);
    }

}