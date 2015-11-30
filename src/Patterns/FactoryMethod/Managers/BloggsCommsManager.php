<?php

namespace Patterns\FactoryMethod\Managers;


use Patterns\FactoryMethod\Encoders\BloggsApptEncoder;

class BloggsCommsManager extends CommsManager{
    function getHeaderText(){
        return "BloggsEncoder Header Text";
    }
    function getApptEncoder(){
        return new BloggsApptEncoder();
    }
    function  getFooterText(){
        return "BloggsEncoder Footer Text";
    }
}