<?php

require_once 'EBookInterface.php';

class Kindle implements EBookInterface {

    public function start() {
        echo "Start" . PHP_EOL;
    }

    public function next() {
        echo "Next" . PHP_EOL;
    }

    // Ebooks have no soul, as paper books do, that's why they don't make jokes :(

}