<?php
// Observers
require_once 'DisplayTemperature.php';
require_once 'DisplayPressure.php';

// Subject
require_once 'WeatherData.php';

// We register the Subject
$weatherStation = new WeatherData();

// We register the observers
$temperature = new DisplayTemperature($weatherStation);
$pressure = new DisplayPressure($weatherStation);

// Let's add some values to our station
$weatherStation->setTemperature('45ª');
$weatherStation->setTemperature('36ª');
$weatherStation->setPressure('54deg');

// Let's remove the temperature observer
$temperature->unregister($weatherStation);

// Let's change some temp values, they won't be displayed - as the temperature observer is no longer subscribed to the station -
$weatherStation->setTemperature('21ª');
$weatherStation->setTemperature('0ª');