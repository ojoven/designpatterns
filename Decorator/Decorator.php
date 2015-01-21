<?php

abstract class Decorator extends Beverage {

    protected $beverage;
    protected $price;

    protected function __construct($beverage) {
        $this->beverage = $beverage;
    }

    public function getPrice() {
        return $this->price + $this->beverage->getPrice();
    }

}