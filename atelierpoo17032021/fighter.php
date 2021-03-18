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

    public function setLife(int $life)
    {
        if ($life >= 0 && $life <= 100) {
            $this->life = $life;
        } else {
            return $this;
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
        $var = rand(1, $this->getStrength());
        return $var;
    }


    public function fight(Fighter $target)
    {
        $pointsDamage = $this->getDamage() - $target->getDefense();

        $newLifePtsTarget = $target->getLife() - abs($pointsDamage);

        return $target->setLife($newLifePtsTarget);
    }

    public function isDead(Fighter $player1, Fighter $player2)
    {
        $round = 1;

        while ($player1->getLife() > 0 && $player2->getLife() > 0) {
            echo PHP_EOL.':::::::On est au round n°'.++$round.':::::::::'.PHP_EOL;

            $player1->fight($player2);
            echo $player1->getName().' attaque '.$player2->getName().PHP_EOL;
            $player2->fight($player1);
            echo $player2->getName().' attaque '.$player1->getName().PHP_EOL;

            echo  'il reste '.$player1->getLife().' points de vie'.' a '.$player1->getName().PHP_EOL;
            echo  'il reste '.$player2->getLife().' points de vie'.' a '.$player2->getName().PHP_EOL;
        }
        
        if ($player2->getLife() > $player1->getLife()) {
            return $player2->getName().'🏆 a vaincu '.$player1->getName().'💀'.PHP_EOL;
        } elseif ($player1->getLife() > $player2->getLife()) {
            return $player1->getName().'🏆 a vaincu '.$player2->getName().'💀'.PHP_EOL;
        }
    }
}
