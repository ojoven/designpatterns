<?php

interface Subject {

    public function addObserver($observer);
    public function removeObserver($observer);
    public function hasChanged();

}