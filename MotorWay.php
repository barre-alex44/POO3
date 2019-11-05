<?php


require_once "HighWay.php";
final class MotorWay extends HighWay
{
    protected $currentVehicles;
    public function addVehicule($vehicle)
    {
        if($vehicle instanceof Car){
            $this->setCurrentVehicles($vehicle);
        }
    }
    public function __construct()
    {
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
    }
}