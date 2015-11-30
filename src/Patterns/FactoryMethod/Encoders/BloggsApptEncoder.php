<?php

namespace Patterns\FactoryMethod\Encoders;


class BloggsApptEncoder extends ApptEncoder{
    function encode(){
        return "Messages encoded in BloggsCall format \n";
    }
}