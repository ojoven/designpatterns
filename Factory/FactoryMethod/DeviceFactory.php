<?php

require_once 'iPad.php';
require_once 'iPhone.php';
require_once 'S3.php';

abstract class DeviceFactory {

    abstract protected function createDevice($type);

}