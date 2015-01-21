<?php
require_once 'Display.php';
require_once 'Observer.php';

class DisplayPressure implements Observer, Display {

    private $_id;

    public function __construct($subject) {
        $id = uniqid();
        $this->_id = $id;
        $subject->addObserver($this);
    }

    public function unregister($subject) {
        $subject->removeObserver($this);
    }

    public function getId() {
        return $this->_id;
    }

    public function display($pressure) {
        echo "Pressure: " . $pressure . PHP_EOL;
    }

    public function update($subject) {
       $this->display($subject->getPressure());
    }


}