<?php

require_once 'ProxyRenderer.php';

// Let's call our proxy and render our message
$proxy = new ProxyRenderer('Please render this');
$proxy->render();