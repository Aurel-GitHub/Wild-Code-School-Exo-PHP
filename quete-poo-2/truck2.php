<?php

require_once 'Vehicle2.php';

class Truck2 extends Vehicle2
{

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var int
     */
    private $capacity;

    /**
     * @var int
     */
    private $currentCharge = 0;

    const ALLOWED_ENERGIES = ['fuel', 'electric'];

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->capacity = $capacity;
    }

    /**
     * @return int
     *
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }


    public function start() : string
    {
        return 'Moteur allumé !';
    }


    public function truckLoading() : string
    {
        if ($this->currentCharge >= $this->capacity) {
            $sentence = 'Is full';
        } else {
            $sentence = 'In feeling';
        }
        return $sentence;
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
     * @return Truck
     */
    public function setEnergy(string $energy): Truck2
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
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * @return int
     */
    public function getCurrentCharge(): int
    {
        return $this->currentCharge;
    }

    /**
     * @param int $currentCharge
     */
    public function setCurrentCharge(int $currentCharge): void
    {
        $this->currentCharge = $currentCharge;
    }
}
