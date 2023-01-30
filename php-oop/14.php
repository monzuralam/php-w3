<?php
require_once 'inc/header.php';

/**
 * Magic method
 * __get( $value );
 * __set( $parameter, $value );
 * __call( $array, $argument );
 */

class Student{
    public $name;
    public $class;
    public $mail;

    public function info(){
        echo "{$this->name} reading class {$this->class}<br>";
    }

    public function __get( $value ){
        echo "{$value} doesn't exists <br>";
    }

    public function __set( $data, $value ){
        echo "{$data} => {$value}";
    }

    public function __call( $data, $value ){
        echo "{$data} . value are ". implode( ",", $value );
    }
}

$s = new Student;
$s->name = "Monzur Alam";
$s->class = "10";
$s->mail = "monzur@school.com";
$s->info();
$s->test;
$s->hello = "404";
$s->errorMethod( '2', 'e', 'e5');

require_once 'inc/footer.php';