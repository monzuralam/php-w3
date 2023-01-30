<?php
namespace php\oop;

class info{
    public $version;
    public function __construct(){
        $this->version = "8.0";
        $this->info();
    }

    private function info(){
        echo "Hello Devs, How are you?";
    }
}