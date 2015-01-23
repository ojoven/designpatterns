<?php

class BookAdapter implements PaperBookInterface {

    protected $ebook;

    public function __construct($ebook) {
        $this->ebook = $ebook;
    }

    public function open() {
        $this->ebook->start();
    }

    public function turnPage() {
        $this->ebook->next();
    }

}