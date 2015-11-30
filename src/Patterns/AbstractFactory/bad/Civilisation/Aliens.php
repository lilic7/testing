<?php
namespace Patterns\AbstractFactory\bad\Civilisation;

use Patterns\AbstractFactory\bad\Forces\AForces;

class Aliens extends ACivilisation{
    private $_civilisation = "Aliens";

    function addForces(AForces $unit){

    }
    function removeForces(AForces $unit){

    }
}