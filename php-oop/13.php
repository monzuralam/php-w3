<?php
require_once 'inc/header.php';

/**
 * Abstract Class
 */

abstract class Student{
    public $name;
    public $class;
    public $mail;

    public function info(){
        echo "{$this->name} reading class {$this->class}<br>";
    }

    public abstract function contact();
}

class Boy extends Student{
    public function details(){
        parent::info();
    }

    public function contact(){
        echo "Feel free to contact: {$this->mail}";
    }
}

$s = new Boy;
$s->name = "Monzur Alam";
$s->class = "10";
$s->mail = "monzur@school.com";
$s->details();
$s->contact();

require_once 'inc/footer.php';