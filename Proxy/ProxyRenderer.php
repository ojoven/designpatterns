<?php

require_once 'RealRenderer.php';
require_once 'Renderer.php';

class ProxyRenderer implements Renderer {

    private $realRenderer;
    private $message;

    public function __construct($message) {
        $this->message = $message;
        return $this;
    }

    public function render() {
        if (!$this->realRenderer) {
            $this->realRenderer = new RealRenderer($this->message);
            $this->realRenderer->render();
        }
    }

}