<?php

require_once 'Decorator.php';

class Ice extends Decorator {

    public function __construct($beverage) {
        $this->price = 1;
        parent::__construct($beverage);
    }

}