<?php

class Php{

    public function __construct(){
        echo "PHP <br>";
    }

    public function year(){
        echo date( 'Y' ) . "<br>";
        return $this; 
    }

    public function info(){
        echo "Current PHP version 8.0 <br>";
        return $this;
    }


}