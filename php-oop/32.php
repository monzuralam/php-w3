<?php
/**
 * Singleton Design Pattern
 */
include 'inc/header.php';

Class ProgrammingLanguage{
    public static $instance;

    public function __construct(){
        if( !self::$instance ){
            self::$instance = $this;
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

/**
 * Real life example of singleton design pattern
 */
class Database{
    public static $database;

    public function __construct(){
        echo "Database Connection.<br>";
    }

    public static function connect(){
        if( ! self::$database ){
            self::$database = new Database();
        }
        return self::$database;
    }
}

Database::connect();
Database::connect();

include 'inc/footer.php';