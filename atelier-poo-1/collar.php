<?php

class Collar
{
    /**
     * @var bool
     */
    private $collar;
         
    /**
    * @return bool
    */
    public function getCollar(): bool
    {
        return $this->collar;
    }

    /**
    * @param bool $collar
    *
    */
    public function setCollar(bool $collar)
    {
        $this->collar = $collar;
    }
}
