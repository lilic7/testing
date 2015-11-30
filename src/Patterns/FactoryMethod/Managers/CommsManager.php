<?php

namespace Patterns\FactoryMethod\Managers;

abstract class CommsManager {
    abstract function getHeaderText();
    abstract function getApptEncoder();
    abstract function getFooterText();
}