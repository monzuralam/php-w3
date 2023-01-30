<?php
/**
 * Constructor
 */
require_once 'inc/header.php';

class Car{
    public $model;
    public $price;
    public $weight;
    public $version;

    public function __construct( $model, $price, $weight, $version){
        $this->model = $model;
        $this->price = $price;
        $this->weight = $weight;
        $this->version = $version;    
    }

    public function CarDetails(){
        echo 'Car Model Name : '. $this->model . "<br>";
        echo 'Car Model price : '. $this->price . "<br>";
        echo 'Car Model weight: '. $this->weight . "<br>";
        echo 'Car Model version: '. $this->version . "<br>";
        echo "<br>";
    }

}

$c1 = new Car( 'BMW', '10M BDT', '300 KG', '2022' );
$c1->CarDetails();

$c2 = new Car( 'Pajero', '15M BDT', '250 KG', '2022' );
$c2->CarDetails();

require_once 'inc/footer.php';