<?php

class Fighter
{
    private const MAX_LIFE = 100;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $strength;

    /**
     * @var int
     */
    private $dexterity;

    private $life = self::MAX_LIFE;

    public function __construct($name, $strength, $dexterity)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function setStrength(int $strength): void
    {
        $this->strength = $strength;
    }

    public function getDexterity(): int
    {
        return $this->dexterity;
    }

    public function setDexterity(int $dexterity): void
    {
        $this->dexterity = $dexterity;
    }

    public function getLife(): int
    {
        return $this->life;
    }

    public function setLife(int $life): void
    {
        if($life >= 0 && $life <= 100 ){
            $this->life = $life;
        }   
    }

    public function getDefense(): int
    {
        return $this->dexterity;
    }

    public function setDefense()
    {
    }

    public function getDamage():int
    {
        $var = $this->getStrength();
        return rand(1, $var);   
    }

    /**
     * attaquant qui attaque sa cible !!!!!!!!!!!
     */
    public function fight(Fighter $target)
    {
        $pointsDamage = $this->getDamage() - $target->getDefense();

        $newPointsTarget = $target->getLife() - abs($pointsDamage);
        
        return $target->setLife($newPointsTarget);

    }
}
