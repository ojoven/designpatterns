<?php

require_once 'State.php';

class Rested implements State {

    private $employee;

    public function __construct($employee) {

        $this->employee = $employee;

    }

    public function work() {
        echo "Yeah, let's produceeee!!" . PHP_EOL;
        $this->employee->toTiredState();
    }

    public function takeCoffee() {
        echo "Oooops, I think I'm a bit nervous now!! WOOOOOOO!!!" . PHP_EOL;
        $this->employee->toNervousState();
    }

    public function browseInternet() {
        echo "Ok, no worries" . PHP_EOL;
    }

}