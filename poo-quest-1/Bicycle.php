<?php

class Bicycle
{
    /**
     * @var int
     *
     */
    private $nbWheels = 2;

    /**
     * @var int
     *
     */
    private $currentSpeed;

    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->getNbWheels;
    }

    /**
     * @param int $nbWheels
     * 
     */
    public function setNbWheels(int $nbWheels = 2)
    {
        if ($nbWheels < 1) {
            echo "Il manque une roue !";
        } else {
            $this->nbWheels = $nbWheels;
        }
    }
    
    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed = 0): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    
    /**
     * @param string $color
     * @return void
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    
    /**
     * @param int $nbSeats
     * @return void
     */
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     *cu @return int
     */
    public function getEnergy(): int
    {
        return $this->energy;
    }
    
    /**
     * @param int $energy
     * @return void
     */
    public function setEnergy(int $energy): void
    {
        $this->energy= $energy;
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
     * @return void
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel= $energyLevel;
    }

    public function forward (int $choiceYouSpeed)
    {
        return $this->setCurrentSpeed($choiceYouSpeed);
    }

    public function brake()
    {
       $sentence = "";
    
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }
}