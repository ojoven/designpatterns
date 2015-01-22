<?php

class Single {

    private static $_instance;
    private static $_counter;

    private function __construct() {

    }

    public static function getInstance() {

        if (self::$_instance==null) {
            self::$_instance = new Single();
            self::$_counter = 0; // When the instance is created, the counter sets to 0
        }

        return self::$_instance;

    }

    public static function increase() {
        self::$_counter++;
    }

    public static function getCounter() {
        return self::$_counter;
    }

}