<?php


require_once "HighWay.php";
final class PedestrianWay extends HighWay
{
    protected $currentVehicles;
    public function addVehicule($vehicle)
    {
        if(($vehicle instanceof Bicycle)||($vehicle instanceof Skateboard)){
            $this->setCurrentVehicles($vehicle);
        }
    }
    public function __construct()
    {
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }
}

