<?php

require_once 'DeviceInterface.php';

class iPad implements Device {

    protected $os;

    public function setOS($os) {

        $this->os = $os;

    }

    public function getOS() {

        return $this->os;

    }

}