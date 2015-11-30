<?php
use Patterns\AbstractFactory\bad\Forces\Transport;
class TransportTest extends PHPUnit_Framework_TestCase {
    protected $transport;

    public function setUp(){
        $this->transport = new Transport();
    }

    function testCorrectSetOfDefaultAttackPower(){

    }
}
