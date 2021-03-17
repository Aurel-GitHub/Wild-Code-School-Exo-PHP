<?php
 
 class Car
 {
    /**
     * @var string
    */
    private $color;

    /**
     * @var int
     */
    private $currentSpeed;

    /**
     * @var int
     */
    private $nbSeats;

    /**
     * @var int
     */
    private $nbWheels;

    /**
     * @var int
     */
    private $energy;
    
    /**
     * @var string
     */
    private $energyLevel;

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels)
    {
        $this->nbWheels = $nbWheels;    
    }


    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;    
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;    
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats)
    {
        $this->nbSeats = $nbSeats;    
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy)
    {
        $this->energy = $energy;    
    }

    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(string $EnergyLevel)
    {
        $this->EnergyLevel = $EnergyLevel;    
    }

    public function __construct(string  $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward()
    {
        $this->currentSpeed = 111;
        
        return "Allons-yyyy !!!";
    }

    public function brake():string
    {
        $sentence = '';
        while($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= 'Brake !';
        }
        return $sentence .= 'I\'m stopped !';
    }

    public function start()
    {
        $this->currentSpeed = 45;
    }
 }