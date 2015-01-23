<?php

require_once 'DeviceFactory.php';
require_once 'iPad.php';
require_once 'iPhone.php';

class Apple extends DeviceFactory {

    public function createDevice($type) {

        switch ($type) {
            case 'iPad':
                $iPad = new iPad();
                $iPad->setOs('iOS 7');
                return $iPad;
                break;

            case 'iPhone':
                $iPhone = new iPhone();
                $iPhone->setOs('iOS 8');
                return $iPhone;
                break;

            default:
                throw new InvalidArgumentException("Apple doesn't make that shit, bro!");
        }

    }

}