<?php

class Bicycle
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var integer
     */
    private $nbSeats = 1;
    /**
     * @var integer
     */
    private $nbWheels = 2;

    /**
     * @param string
     */
    public function setColor(string $color):void
    {
        $this->color =$color;
    }

    /**
     * @return string
     */
    public function getColor():string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int 
     * 
     */
    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;    
    }

    public  function __construct(string $color, int $currentSpeed)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
    }

    public function forward()
    {
        $this->currentSpeed = 225;
        
        return "Allons-yyyyy !!!";
    }

    public function brake()
{       
        $sentence = '';
        while($this->currentSpeed >= 0){
            $this->currentSpeed --;
            $sentence .= 'Brake !';
        }
        return $sentence .= 'I\'m Stopped !';
    }

}