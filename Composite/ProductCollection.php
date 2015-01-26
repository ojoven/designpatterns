<?php

require_once 'ProductComponent.php';

class ProductCollection extends ProductComponent {

    protected $name;
    protected $productComponents;

    public function __construct($name) {
        $this->name = $name;
        $this->productComponents = array();
    }

    public function render() {
        echo $this->name . PHP_EOL . "---------------" . PHP_EOL;
        foreach ($this->productComponents as $productComponent) {
            $productComponent->render();
        }
    }

    public function add($productComponent) { // It can be both a Product or a Collection
        array_push($this->productComponents, $productComponent);
    }

}