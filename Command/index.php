<?php
// Receiver
require_once 'Painter.php';

// Commands
require_once 'PaintCommand.php';
require_once 'CleanCommand.php';

// Invoker
require_once 'ProjectManager.php';

// Let's create a Painter - Receiver of the command
$painter = new Painter();

// Ok, we call the Invoker - Project Manager - and we pass him the command
$projectManager = new ProjectManager();

$paint = new PaintCommand($painter);
$projectManager->setCommand($paint);
$projectManager->run();

$clean = new CleanCommand($painter);
$projectManager->setCommand($clean);
$projectManager->run();