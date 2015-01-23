<?php

require_once 'Apple.php';
require_once 'Samsung.php';

// We'll have different factories
// Ok, I'm Steve Jobs, let's create Apple.
$apple = new Apple();

// That was easy, man!
// Let's create the iPhone
$iPhone = $apple->createDevice('iPhone');
echo "The OS for the iPhone is " . $iPhone->getOS() . PHP_EOL;

// Wow, we're super innovators
$iPad = $apple->createDevice('iPad');
echo "The OS for the iPad is " . $iPad->getOS() . PHP_EOL;

// Let's create the Windows Phone
try {
    $iPad = $apple->createDevice('Windows Phone'); // Ooooops!
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

// Hey, and what about Samsung
$samsung = new Samsung();
$s3 = $samsung->createDevice('S3');
echo "We created a S3, and its OS is: " . $s3->getOS();