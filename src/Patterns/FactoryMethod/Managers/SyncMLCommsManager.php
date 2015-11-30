<?php

namespace Patterns\FactoryMethod\Managers;

use Patterns\FactoryMethod\Encoders\SyncMLApptEncoder;

class SyncMLCommsManager extends CommsManager{
    function getHeaderText(){
        return "SyncMLEncoder Header Text";
    }
    function getApptEncoder(){
        return new SyncMLApptEncoder();
    }
    function  getFooterText(){
        return "SyncMLEncoder Footer Text";
    }
}