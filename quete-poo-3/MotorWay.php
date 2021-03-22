<?php

require_once 'HighWay.php';
require_once 'car2.php';

final class MotorWay extends HighWay
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;  

    public function addVehicle(Vehicle2 $vehicle2)
    {
        if($vehicle2 instanceof Vehicle2){
            array_push($this->currentVehicle, $vehicle2);
            return $this->currentVehicle;
        }

        return " Il n'est pas possible d'utiliser ce véhicule sur l'autoroute !";
    }
}
