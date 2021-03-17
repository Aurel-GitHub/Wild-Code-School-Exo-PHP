<?php

// require './collar.php';

class Cat 
{
    /**
     * @var string
     */
    public $nom; 

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $couleur;

    /**
     * @var int
     */
    public $fatigue;

    /**
     * @var bool
     */
    public $colar;

    public function __construct($nom, $image, $couleur, $fatigue = 100, $colar = null)
    {
        $this->nom = $nom;
        $this->image = $image;
        $this->couleur = $couleur;
        $this->fatigue = $fatigue;
        $this->colar = $colar;
    }


    public function walk()
    {       
        //  while($this->fatigue >= 0){
                return $this->fatigue = 50;
        //  }
    }
}