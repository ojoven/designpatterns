<?php

require_once 'DeviceFactory.php';
require_once 'S3.php';

class Samsung extends DeviceFactory {

    public function createDevice($type) {

        switch ($type) {
            case 'S3':
                $s3 = new S3();
                $s3->setOs('Android 4.2');
                return $s3;
                break;

            default:
                throw new InvalidArgumentException("Samsung doesn't make that shit, bro!");
        }

    }

}