<?php

abstract class Beverage {

    final public function prepareBeverage() {

        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
        $this->serveToTable();

    }

    /**  Functions that must be implemented - differently - between subclasses **/
    abstract protected function brew();
    abstract protected function addCondiments();


    /** Functions that are common between subclasses **/
    protected function boilWater() {
        echo "Boiling water..." . PHP_EOL;
    }

    protected function pourInCup() {
        echo "Pouring in cup..." . PHP_EOL;
    }

    protected function serveToTable() {
        echo "Beverage is ready!" . PHP_EOL;
    }

}