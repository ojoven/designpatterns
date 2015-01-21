<?php
require_once 'Subject.php';

class WeatherData implements Subject {

    private $_observers;
    private $_temperature;
    private $_pressure;

    /** Subject related functions **/
    public function __construct() {
        $this->_observers = array();
        $this->_temperature =  $this->_pressure = "Not retrieved yet";
    }

    public function addObserver($observer) {
        array_push($this->_observers,$observer);
    }

    public function removeObserver($observer) {

        // Can't think of another way of doing this
        $stillObservers = array();
        foreach ($this->_observers as $subscribed) {
            if ($subscribed->getId()!=$observer->getId()) {
                array_push($stillObservers,$subscribed);
            }
        }
        $this->_observers = $stillObservers;
    }

    public function hasChanged() {
        $this->notifyObservers();
    }

    public function notifyObservers() {
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

    /** Custom Functions **/
    // Temperature
    public function getTemperature() {
        return $this->_temperature;
    }

    public function setTemperature($temperature) {
        $this->_temperature = $temperature;
        $this->hasChanged();
    }

    // Pressure
    public function getPressure() {
        return $this->_pressure;
    }

    public function setPressure($pressure) {
        $this->_pressure = $pressure;
        $this->hasChanged();
    }

}