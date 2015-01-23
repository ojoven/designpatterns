<?php

require_once 'VehicleFactory.php';

// Let's create the needed vehicles, but for that we'll use the factory
$factory = new VehicleFactory();

// Ok, gimme a car
$car = $factory->createVehicle('car');
$car->driveTo('Bilbao');

// Hey Factory, now gimme a bicycle
$bicycle = $factory->createVehicle('bicycle');
$bicycle->driveTo('Gros');