<?php

require_once 'ProductComponent.php';

class Product extends ProductComponent {

    protected $name;

    public function __construct($name) {
        $this->name = $name;
        return $this;
    }

    protected function render() {
        echo $this->name . PHP_EOL;
    }

}