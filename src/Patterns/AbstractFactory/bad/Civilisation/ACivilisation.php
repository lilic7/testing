<?php
namespace Patterns\AbstractFactory\bad\Civilisation;

use Patterns\AbstractFactory\bad\Forces\AForces;
abstract class ACivilisation {
    protected $army = array();

    abstract function addForces(AForces $unit);

    function getArmy(){
        return $this->forces;
    }
}