<?php

require_once 'Tea.php';
require_once 'Coffee.php';

/** Let's prepare a tea and a coffee **/
$tea = new Tea();
$tea->prepareBeverage();

$coffee = new Coffee();
$coffee->prepareBeverage();