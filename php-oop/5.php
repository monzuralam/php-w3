<?php
/**
 * Destruct
 */
require_once 'inc/header.php';

class Food{
    public $name;
    public $price;

    public function __construct( $name, $price ){
        echo "Food name : " . $this->name = $name . "<br>";
        echo "Food name : " . $this->price = $price . "<br>";
    }

    public function __destruct(){
        unset( $this->name );
        unset( $this->price );
    }
}

$rice = new Food( 'Rice', '60 TK BDT' );
require_once 'inc/footer.php';