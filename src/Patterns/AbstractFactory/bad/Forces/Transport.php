<?php
namespace Patterns\AbstractFactory\bad\Forces;


class Transport extends AForces{
    const SPEED = 20;
    const POWER = 25;

    function __construct($unitsNum = null, $unitPower = null){
        $this->unitsNum    = $unitsNum  ? $unitsNum     : 10;
        $this->unitPower   = $unitPower ? $unitPower    : 25;
        $this->attackPower = $this->unitPower * $this->unitsNum;
    }

    function attack(AForces $unit){

    }
}