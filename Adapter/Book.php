<?php

require_once 'PaperBookInterface.php';

class Book implements PaperBookInterface {

    public function open() {
        echo "I'm a book, I'm open!" . PHP_EOL;
    }

    public function turnPage() {
        echo "Wet your tongue? Turn page!" . PHP_EOL;
    }

}