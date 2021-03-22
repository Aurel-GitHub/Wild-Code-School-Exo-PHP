<?php


abstract class HighWay 
{
    protected array $currentVehicle;
    protected int $nbLane;  
    protected int $maxSpeed;

    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle2 $vehicle2);


    /**
     * Get the value of maxSpeed
     *
     * @return  int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @param  int  $maxSpeed
     *
     * @return  self
     */
    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    /**
     * Get the value of nbLane
     *
     * @return  int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @param  int  $nbLane
     *
     * @return  self
     */
    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of currentVehicle
     *
     * @return  array
     */
    public function getCurrentVehicle()
    {
        return $this->currentVehicle;
    }

    /**
     * Set the value of currentVehicle
     *
     * @param  array  $currentVehicle
     *
     * @return  self
     */
    public function setCurrentVehicle(array $currentVehicle)
    {
        $this->currentVehicle = $currentVehicle;

        return $this;
    }

    
}
