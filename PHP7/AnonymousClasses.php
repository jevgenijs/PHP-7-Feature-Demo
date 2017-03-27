<?php

//can use an interface
interface ILogger {
    public function log();
}

//can extend some base class
class CommonLogger {
}

$logger = new class('someData') extends CommonLogger {
    //use Trait;

    public function __construct($data) {
        $this->data = $data;
    }
    public function log() {
        echo 'Logging data: ' . $this->data;
    }
};

$logger->log();
