<?php
require_once 'inc/header.php';

class Car{
    public $model;
    public $price;
    public $weight;
    public $version;

    public function CarDetails(){
        echo 'Car Model Name : '. $this->model . "<br>";
        echo 'Car Model price : '. $this->price . "<br>";
        echo 'Car Model weight: '. $this->weight . "<br>";
        echo 'Car Model version: '. $this->version . "<br>";
    }

    public function CarDriver(){

    }
}

$c1 = new Car;
$c1->model = "Toyota";
$c1->price = "1M BDT";
$c1->weight = "500KG";
$c1->version = "NEW";
$c1->CarDetails();

require_once 'inc/footer.php';