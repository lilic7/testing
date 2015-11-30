<?php
namespace Patterns\AbstractFactory\bad\Forces;

abstract class AForces {
    protected $power;

    abstract function attack(AForces $unit);
}