<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28-Nov-15
 * Time: 13:28
 */
use Patterns\FactoryMethod\Managers\BloggsCommsManager;

class BloggsCommsManagerTest extends PHPUnit_Framework_TestCase {

    public function testIfCanGetABloggsClassObject(){
        $manager = new BloggsCommsManager();
        $bloggsEncoder = $manager->getApptEncoder();
        $this->assertInstanceOf("Patterns\\FactoryMethod\\Encoders\\BloggsApptEncoder", $bloggsEncoder, "CommManager did not return a BloggsEncoder");
        return $manager;
    }

    /**
     * @depends testIfCanGetABloggsClassObject
     */
    public function testBloggsHeaderText($bloggsEncoder){
        $this->assertEquals("BloggsEncoder Header Text", $bloggsEncoder->getHeaderText(), "Function getHeader did not return correct text for Bloggs format");
    }

    /**
     * @depends testIfCanGetABloggsClassObject
     */
    public function testBloggsFooterText($bloggsEncoder){
        $this->assertEquals("BloggsEncoder Footer Text", $bloggsEncoder->getFooterText(), "Function getHeader did not return correct text for Bloggs format");
    }
}
