<?php

require_once 'Renderer.php';

class RealRenderer implements Renderer {

    private $message;

    public function __construct($message) {
        $this->message = $message;
    }

    public function render() {
        echo $this->message . " (rendered by " . get_class() . ")" . PHP_EOL;
    }

}