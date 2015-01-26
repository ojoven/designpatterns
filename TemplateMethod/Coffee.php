<?php

require_once 'Beverage.php';

class Coffee extends Beverage {

    /**  Functions that must be implemented - differently - between subclasses **/
    protected function brew() {
        echo "Put some coffee beans..." . PHP_EOL;
    }

    protected function addCondiments() {
        echo "Pouring some sugar..." . PHP_EOL;
    }
}