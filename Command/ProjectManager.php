<?php

class ProjectManager {

    protected $command;

    public function setCommand($command) {

        $this->command = $command;

    }

    public function run() {

        $this->command->execute();

    }

}