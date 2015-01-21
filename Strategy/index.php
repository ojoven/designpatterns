<?php
require_once 'RedDuck.php';
require_once 'Talk.php';

$duck = new RedDuck();
$duck->performQuack();

// Let's change it's quack "algorithm" / behaviour
$duck->setQuackBehaviour(new Talk());

// It talks! Quack quack!
$duck->performQuack();