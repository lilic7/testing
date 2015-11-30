<?php

namespace Patterns\Singleton;


class Singleton {
    private static $instance;
    private $testString = '';

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct(){}
    private function __clone(){}

    public function write($string){
        $this->testString = $string;
        return $this;
    }

    public function read(){
        return $this->testString;
    }
}