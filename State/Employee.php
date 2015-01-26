<?php

require_once 'Rested.php';
require_once 'Tired.php';
require_once 'Nervous.php';

class Employee {

    private $restedState;
    private $tiredState;
    private $nervousState;
    private $state;

    public function __construct() {

        // Let's create all the states
        $this->restedState = new Rested($this);
        $this->tiredState = new Tired($this);
        $this->nervousState = new Nervous($this);

        $this->state = $this->restedState;

    }

    // Interface functions
    public function work() {
        $this->state->work();
    }

    public function takeCoffee() {
        $this->state->takeCoffee();
    }

    public function browseInternet() {
        $this->state->browseInternet();
    }

    // State changers
    public function toRestedState() {
        $this->state = $this->restedState;
    }

    public function toTiredState() {
        $this->state = $this->tiredState;
    }

    public function toNervousState() {
        $this->state = $this->nervousState;
    }

}