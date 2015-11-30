<?php
namespace Patterns\AbstractFactory\bad\Forces;


class Footman extends AForces{
    function __construct($power){
        $this->power = (int) $power ? $power : 100;
    }

    function getPower(){
        return $this->power;
    }

    function attack(AForces $unit){

    }
}