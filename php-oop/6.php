<?php
require_once 'inc/header.php';
/**
 * Class constant in PHP OOP
 */

class Table{
    public $brand;
    public $price;
    const VERSION = "1.0.0";

    public function __construct( $brand, $price ){
        echo "Congrats !!! you win { $this->brand = $brand } which price is { $this->price = $price }";
        echo "<br>";
    }

    public function display(){
        echo "Table version : " . Table::VERSION;
    }

    public function __destruct(){
        unset( $this->brand );
        unset( $this->price );
    }
}

$t1 = new Table( 'NAVANA', '3000 BDT' );
$t1->display();

require_once 'inc/footer.php';