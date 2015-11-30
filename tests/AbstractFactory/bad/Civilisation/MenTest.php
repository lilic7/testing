<?php
use Patterns\AbstractFactory\bad\Civilisation\Men;
class MenTest extends PHPUnit_Framework_TestCase {
    private $menCivilisation;

    public function setUp(){
        $this->menCivilisation = new Men();
    }

    function testTrue(){

    }
}