<?php
namespace Patterns\AbstractFactory\bad\Civilisation;

use Patterns\AbstractFactory\bad\Forces\AForces;

class Men extends ACivilisation{
    private $_civilisation = "Humans";

    function addForces(AForces $unit){
        array_push($this->army, $unit);
    }

    function removeForces(AForces $unit){

    }
}