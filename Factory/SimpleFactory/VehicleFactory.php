<?php

require_once 'Car.php';
require_once 'Bicycle.php';

class VehicleFactory {

    protected $typeList;

    public function __construct() {

        // We set here the types that are accepted by the Factory
        // and the classes associated to each of them
        $this->typeList = array(
            'bicycle' => 'Bicycle',
            'car' => 'Car'
        );

    }

    public function createVehicle($type) {

        if (!array_key_exists($type, $this->typeList)) {
            throw new InvalidArgumentException("$type is not valid vehicle");
        }

        $class = $this->typeList[$type];
        return new $class();

    }

}