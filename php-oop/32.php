<?php
/**
 * Singleton Design Pattern
 */
include 'inc/header.php';

Class ProgrammingLanguage{
    public static $instance;

    public function __construct(){
        if( !self::$instance ){
            self::$instance = new ;
            echo "Created new instance.<br>";
            return self::$instance;
        }else{
            echo "Old instance.<br>";
            return self::$instance;
        }
    }
}

new ProgrammingLanguage();
new ProgrammingLanguage();
new ProgrammingLanguage();
new ProgrammingLanguage();

include 'inc/footer.php';