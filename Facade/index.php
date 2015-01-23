<?php

require_once 'SmartHome.php';
require_once 'Television.php';
require_once 'Light.php';
require_once 'Blinds.php';

// Create dependencies
$television = new Television();
$light = new Light();
$blinds = new Blinds();

// Facade
$smartHome = new SmartHome($television,$light,$blinds);

// Let's watch a film
$smartHome->startFilm();

sleep(5); // That's a short film, isn't it?

$smartHome->finishFilm();