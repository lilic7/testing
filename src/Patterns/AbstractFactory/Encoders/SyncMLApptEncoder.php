<?php

namespace Patterns\FactoryMethod\Encoders;


class SyncMLApptEncoder extends ApptEncoder{
    function encode(){
        return "Messages encoded in SyncML format \n";
    }
}