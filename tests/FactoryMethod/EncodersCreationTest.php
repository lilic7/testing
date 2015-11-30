<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28-Nov-15
 * Time: 16:13
 */

use Patterns\FactoryMethod\Managers\BloggsCommsManager;
use Patterns\FactoryMethod\Managers\CommsManager;

class EncodersCreationTest extends PHPUnit_Framework_TestCase {

    function makeEncode(CommsManager $manager){
        return $manager->getApptEncoder()->encode();
    }

    function testEncodeFunctionReturnsCorrectAnswer(){
        $encoder = new BloggsCommsManager();
        $text = $this->makeEncode($encoder);
        $this->assertEquals("Messages encoded in BloggsCall format \n", $text, "");
    }
}
