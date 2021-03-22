<?php

final class ResidentialWay extends HighWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;


    public function addVehicle(Vehicle2 $vehicle2)
    {
        if($vehicle2 instanceof Bicycle2 ){
            array_push($this->currentVehicle, $vehicle2);
            return $this->currentVehicle;
        }
        return " Il n'est pas possible d'aller sur l'autoroute !";
    }


}
