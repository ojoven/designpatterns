<?php
require_once 'CommandInterface.php';

class PaintCommand implements CommandInterface {

    protected $painter;

    public function __construct($painter) {

        $this->painter = $painter;
    }

    public function execute() {

        $this->painter->paint();

    }

}