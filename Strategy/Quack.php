<?php
require_once 'QuackBehaviour.php';

class Quack implements QuackBehaviour {

    public function __construct() {

    }

    public function quack() {
        echo "quack!" . PHP_EOL;
    }

}