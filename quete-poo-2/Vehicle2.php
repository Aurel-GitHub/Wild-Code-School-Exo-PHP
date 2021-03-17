<?php
class Vehicle2
{

    /**
    * @var string
    */
    protected $color;


    /**
    * @var integer
    */
    protected $currentSpeed = 0;


    /**
    * @var integer
    */
    protected $nbSeats;


    /**
    * @var integer
    */
    protected $nbWheels;


    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }


    public function forward(): string
    {
        $this->currentSpeed += 15;
        return "Go !";
    }


    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 5;
            $sentence .= 'Je freine !'.PHP_EOL;
        }
        $sentence .= "Maintenant je suis à l'arrêt";
        return $sentence;
    }


    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }


    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }


    public function getColor(): string
    {
        return $this->color;
    }


    public function setColor(string $color): void
    {
        $this->color = $color;
    }


    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }


    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }


    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }


    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}
