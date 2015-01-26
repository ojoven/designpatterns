<?php

require_once 'State.php';

class Nervous implements State {

    private $employee;

    public function __construct($employee) {

        $this->employee = $employee;

    }

    public function work() {
        echo "Wahahahahaa!! Gimme more coffee and I'll eat this fucking world!" . PHP_EOL;
    }

    public function takeCoffee() {
        echo "No, that's insane! Too much coffee in my system! Ñi ñi ñi!! Lalala!!" . PHP_EOL;
    }

    public function browseInternet() {
        echo "Wow, yes. This calms me down. Great!" . PHP_EOL;
        $this->employee->toRestedState();
    }

}