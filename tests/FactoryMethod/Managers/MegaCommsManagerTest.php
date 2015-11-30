<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28-Nov-15
 * Time: 13:28
 */
use Patterns\FactoryMethod\Managers\MegaCommsManager;

class MegaCommsManagerTest extends PHPUnit_Framework_TestCase {

    public function testIfCanGetAMegaClassObject(){
        $manager = new MegaCommsManager();
        $MegaEncoder = $manager->getApptEncoder();
        $this->assertInstanceOf("Patterns\\FactoryMethod\\Encoders\\MegaApptEncoder", $MegaEncoder, "CommManager did not return a MegaEncoder");
        return $manager;
    }
    /**
     * @depends testIfCanGetAMegaClassObject
     */
    public function testMegaHeaderText($megaEncoder){
        $this->assertEquals("MegaEncoder Header Text", $megaEncoder->getHeaderText(), "Function getHeader did not return correct text for Mega format");
    }

    /**
     * @depends testIfCanGetAMegaClassObject
     */
    public function testBloggsFooterText($megaEncoder){
        $this->assertEquals("MegaEncoder Footer Text", $megaEncoder->getFooterText(), "Function getFooter did not return correct text for Mega format");
    }
}
