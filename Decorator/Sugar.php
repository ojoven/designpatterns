<?php

require_once 'Decorator.php';

class Sugar extends Decorator {

    public function __construct($beverage) {
        $this->price = 3;
        parent::__construct($beverage);
    }

}