<?php

class SmartHome {

    protected $television;
    protected $light;
    protected $blinds; // persianas

    // We'll use DI because yes
    public function __construct($television,$light,$blinds) {

        $this->television = $television;
        $this->light = $light;
        $this->blinds = $blinds;

    }

    public function startFilm() {

        echo "Hey, take the popcorn, the film is about to start!" . PHP_EOL;

        $this->light->off();
        $this->blinds->close();
        $this->television->on();

        echo "(enjoying the film...)" . PHP_EOL;

    }

    public function finishFilm() {

        echo "The film ended." . PHP_EOL;

        $this->light->on();
        $this->blinds->open();
        $this->television->off();

        echo "Ok, now it's time to take your laptop and learn some new design patterns, isn't it?" . PHP_EOL;

    }

}