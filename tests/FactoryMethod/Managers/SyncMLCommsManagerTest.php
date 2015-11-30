<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28-Nov-15
 * Time: 13:28
 */
use Patterns\FactoryMethod\Managers\SyncMLCommsManager;

class SyncMLCommsManagerTest extends PHPUnit_Framework_TestCase {

    public function testIfCanGetASyncMLClassObject(){
        $manager = new SyncMLCommsManager();
        $syncMLEncoder = $manager->getApptEncoder();
        $this->assertInstanceOf("Patterns\\FactoryMethod\\Encoders\\SyncMLApptEncoder", $syncMLEncoder, "CommManager did not return a SyncMLEncoder");
        return $manager;
    }

    /**
     * @depends testIfCanGetASyncMLClassObject
     */
    public function testSyncMLHeaderText($syncMLEncoder){
        $this->assertEquals("SyncMLEncoder Header Text", $syncMLEncoder->getHeaderText(), "Function getHeader did not return correct text for Mega format");
    }

    /**
     * @depends testIfCanGetASyncMLClassObject
     */
    public function testSyncMLFooterText($syncMLEncoder){
        $this->assertEquals("SyncMLEncoder Footer Text", $syncMLEncoder->getFooterText(), "Function getFooter did not return correct text for Bloggs format");
    }
}
