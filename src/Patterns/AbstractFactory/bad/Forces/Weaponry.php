<?php
namespace Patterns\AbstractFactory\bad\Forces;

class Weaponry extends AForces{
    const SPEED = 0;
    const POWER = 15;

    function __construct($unitsNum = null){
        $this->unitsNum    = $unitsNum  ? $unitsNum     : 5;
        $this->attackPower = self::POWER * $this->unitsNum;
    }
    function attack(AForces $unit){

    }
}