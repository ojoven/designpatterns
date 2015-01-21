<?php

abstract class Duck {

    protected $_quackBehaviour;
    protected $_flyBehaviour;

    public function __construct() {

    }

    public function performQuack() {
        $this->_quackBehaviour->quack();
    }

    public function performFly() {
        $this->_flyBehaviour->fly();
    }

    public function setQuackBehaviour($flyBehaviour) {
        $this->_quackBehaviour = $flyBehaviour;
    }

    public function setFlyBehaviour($flyBehaviour) {
        $this->_flyBehaviour = $flyBehaviour;
    }


}