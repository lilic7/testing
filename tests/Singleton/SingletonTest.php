<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28-Nov-15
 * Time: 12:40
 */
use Patterns\Singleton\Singleton;

class SingletonTest extends PHPUnit_Framework_TestCase {
    private $class;
    private $otherClass;

    public function setUp(){
        $this->class = Singleton::getInstance();
        $this->otherClass = Singleton::getInstance();
    }

    public function testSameObject(){
        $this->assertSame($this->class, $this->otherClass, "Not the same object. Singleton does not work");
    }

    public function testWriteString(){
        $stringOne = "String one";
        $this->class->write("String one");
        $this->assertSame($stringOne, $this->otherClass->read(), "Strings are not equivalent");
    }

    public function testCanAddNewAttributeToSingletonClass(){
        $this->class->item = "A new attribute is added";
        $this->assertObjectHasAttribute('item', $this->class, "Class OtherClass does not have attribute 'item'");
    }

    public function testAddNewAttributeToClass(){
        $this->class->item = "A new attribute is added";
        $this->assertObjectHasAttribute('item', $this->otherClass, "Class OtherClass does not have attribute 'item'");
    }
}
