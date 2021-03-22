<?php


final class PedetestrianWay extends HighWay
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle(Vehicle2 $vehicle2)
    {
        if($vehicle2 instanceof Bicycle2){
            array_push($this->currentVehicle, $vehicle2);
            return $this->currentVehicle;
        }

        return " Il n'est pas possible d'utiliser ce véhicule sur l'autoroute !";
    }


}
