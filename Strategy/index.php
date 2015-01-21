<?php
require_once 'RedDuck.php';
require_once 'Talk.php';

$duck = new RedDuck();
$duck->performQuack();
$duck->setQuackBehaviour(new Talk());
$duck->performQuack();