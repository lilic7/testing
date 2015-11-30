<?php
use Patterns\AbstractFactory\bad\Civilisation\Aliens;

class AliensTest extends PHPUnit_Framework_TestCase {
    private $aliensCivilisation;

    public function setUp(){
        $this->aliensCivilisation = new Aliens;
    }

    public function testTrue(){
        $this->assertTrue(true);
    }
}
