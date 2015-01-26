<?php

require_once 'State.php';

class Tired implements State {

    private $employee;

    public function __construct($employee) {

        $this->employee = $employee;

    }

    public function work() {
        echo "Sorry, I can't work, I'm too tired. Please give me a coffee." . PHP_EOL;
    }

    public function takeCoffee() {
        echo "Wow, thanks. I needed that." . PHP_EOL;
        $this->employee->toRestedState();
    }

    public function browseInternet() {
        echo "I could do this for hours!" . PHP_EOL;
    }

}