<?php
/**
 * Static property & method
 */
require_once 'inc/header.php';

class Bag{
    public $name;
    public $model;
    public static $version = "2022";

    public function __construct( $name, $model ){
        echo $this->name = $name;
        echo "<br>";
        echo $this->model = $model;
        echo "<br>";
    }

    public static function display(){
        echo "Version : " . self::$version;
    }

    public function __destruct(){
        unset( $this->name );
        unset( $this->model );
    }
}

$b1 = new Bag( "Reebook", "2022" );
Bag::display();

require_once 'inc/footer.php';