<?php

use Patterns\AbstractFactory\bad\Forces\Footman;
class FootmanTest extends PHPUnit_Framework_TestCase {
    protected $footman;

    public function setUp(){
        $this->footman = new Footman(200);
    }

    public function testPowerIsInt(){
        $this->assertEquals(200, $this->footman->getPower(), "Power is not Integer");
    }

    function testWrongPowerSet(){
        $wrongFootman = new Footman("one");
        $this->assertEquals(100, $wrongFootman->getPower(), "Not integer");
    }

}
