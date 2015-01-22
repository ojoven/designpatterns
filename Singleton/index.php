<?php

require_once 'Single.php';

// We aren't able to create an instance the default way
// Had to comment it as it throws a PHP Fatal Error
// $single = new Single();

// Ok, let's try the Singleton way
$single = Single::getInstance();

// The counter is = 0 when the instance is created
echo $single->getCounter() . PHP_EOL;

// Let's increase the counter
$single->increase();
$single->increase();

// How much is now?
echo $single->getCounter() . PHP_EOL;

// Ok, let's get 'another' instance
$singleMirror = Single::getInstance();

// This demonstrates that the instance is the same
echo $singleMirror->getCounter() . PHP_EOL;