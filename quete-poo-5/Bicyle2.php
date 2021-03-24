<?php
require_once 'Vehicle2.php';

class Bicycle2 extends Vehicle2 implements LightableInterfacee
{

    public function switchOn(bool $true) :bool
    {
        if($this->currentSpeed >= 10) {
            return $true = true;
        }
    }

    public function switchOff(bool $false) :bool
    {
        return $false = false;
    }

}