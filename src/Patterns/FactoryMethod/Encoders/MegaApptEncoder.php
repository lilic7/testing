<?php

namespace Patterns\FactoryMethod\Encoders;

class MegaApptEncoder extends ApptEncoder{
    function encode(){
        return "Messages encoded in MegaCalls format \n";
    }
}