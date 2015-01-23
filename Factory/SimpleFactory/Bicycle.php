<?php

require_once 'VehicleInterface.php';

class Bicycle implements Vehicle {

    public function driveTo($place) {
        echo "I take more time to go to $place, but I'm super healthy!" . PHP_EOL;
    }

}