<?php

namespace Patterns\FactoryMethod\Managers;

use Patterns\FactoryMethod\Encoders\MegaApptEncoder;

class MegaCommsManager extends CommsManager{
    function getHeaderText(){
        return "MegaEncoder Header Text";
    }
    function getApptEncoder(){
        return new MegaApptEncoder();
    }
    function  getFooterText(){
        return "MegaEncoder Footer Text";
    }
}