<?php

require_once 'VehicleInterface.php';

class Car implements Vehicle {

    public function driveTo($place) {
        echo "I'm fast, and furious! Let's go to $place!" . PHP_EOL;
    }

}