<?php
require_once 'Duck.php';
require_once 'FlyWithWings.php';
require_once 'Quack.php';

class RedDuck extends Duck {

    public function __construct() {
        $this->_flyBehaviour = new FlyWithWings();
        $this->_quackBehaviour = new Quack();
    }

    /**
    public function performQuack() {
        $this->_quackBehaviour->quack();
    }

    public function performFly() {
        $this->_flyBehaviour->fly();
    }
     * **/


}