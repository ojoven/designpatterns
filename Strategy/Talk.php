<?php
require_once 'QuackBehaviour.php';

class Talk implements QuackBehaviour {

    public function quack() {
        echo "Blah blah blah, I'm a talking duck!";
    }

}