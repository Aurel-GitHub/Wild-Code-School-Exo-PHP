<?php

require_once './quete-poo-4/vehicle2.php';


class Car2 extends Vehicle2 implements LightableInterfacee
{
    /**
     * @var string
     */
    private string $energy;

    /**
     * @var int
     */
    private int $energyLevel;

    /**
     * @var boolean
     */
    private bool $hasParkBrake = false;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function setParkBrake()
    {
        if ($this->hasParkBrake == true)
        {
            $this->hasParkBrake = false;
            return $this->start();
        } elseif ($this->hasParkBrake == false)
        {
            $this->hasParkBrake = true;
            return 'Frein à main activé.PHP_EOL';
        }
        return $this;
    }

    public function start(): string
    {
        if ($this->hasParkBrake == true)
        {
            throw new Exception('Veuillez retirer le frein à main.');
        } else {
            return "Le frein à main a bien été retiré !";
        }
    }

    public function switchOn(bool $true) :bool
    {
            return $true = true;
    }

    public function switchOff(bool $false) :bool
    {
        return $false = false;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }


    /**
     * @param string $energy
     * @return $this
     */
    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
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
     */
    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

}