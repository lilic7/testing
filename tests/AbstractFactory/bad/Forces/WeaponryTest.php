<?php
use Patterns\AbstractFactory\bad\Forces\Weaponry;
class WeaponryTest extends PHPUnit_Framework_TestCase {
    protected $weaponry;

    public function setUp(){
        $this->weaponry = new Weaponry();
    }

    function testCorrectSetOfDefaultAttackPower(){

    }
}
