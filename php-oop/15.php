<?php
require_once 'inc/header.php';

/**
 * class exists
 */

class Student{

    public function info(){
        echo "class exits";
    }
}

if( class_exists('Student') ){
    $s = new Student;
    
    if( method_exists( $s, 'info' ) ){
        $s->info();
    }
}

require_once 'inc/footer.php';