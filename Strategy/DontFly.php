<?php
require_once 'FlyBehaviour.php';

class DontFly implements FlyBehaviour {

    public function fly() {
        echo "I can't fly :(";
    }

}