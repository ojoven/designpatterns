<?php

require_once 'Beverage.php';

class Coffee extends Beverage {

    public function __construct() {
        $this->price = 10;
    }

}