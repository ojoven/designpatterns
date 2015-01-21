<?php

interface Observer {

    public function update($subject);
    public function getId(); // We use this for unsubscribing

}