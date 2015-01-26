<?php

require_once 'Beverage.php';

class Tea extends Beverage {

    /**  Functions that must be implemented - differently - between subclasses **/
    protected function brew() {
        echo "Put the tea bag in the teapot..." . PHP_EOL;
    }

    protected function addCondiments() {
        echo "Pouring some lemon..." . PHP_EOL;
    }
}