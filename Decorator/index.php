<?php

require_once 'Coffee.php';
require_once 'Sugar.php';
require_once 'Ice.php';

// We create the component
$coffee = new Coffee();

// We wrap it with the different decorators
$coffee = new Sugar($coffee);
$coffee = new Sugar($coffee);
$coffee = new Ice($coffee);

echo "The final price of the coffee is: " . $coffee->getPrice() . " pesetas" . PHP_EOL;