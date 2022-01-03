<?php

/**
 * String
 * Integer
 * Float
 * Boolean
 * Array
 * Object
 * NULL
 * Resource
 */

// String 
$a = "Hello PHP";
var_dump($a);
echo "<br>";

// Integer 
$b = 10;
var_dump($b);
echo "<br>";

// Float
$c = 10.22;
var_dump($c);
echo "<br>";

// Boolean 
$d = true;
var_dump($d);
echo "<br>";

// Array 
$e = array('apple','banana','pineapple');
var_dump($e);
echo "<br>";

// object
class Car {
    public $color;
    public $model;

    public function __construct( $color, $model){
        $this->color = $color;
        $this->model = $model;
    }

    public function message(){
        return "Color: ". $this->color . " . Model: " . $this->model .".";
    }
}

$bmwCar = new Car("White","BMW");
echo $bmwCar->message();
echo "<br>";
var_dump($bmwCar);
echo "<br>";

// null
$f = null;
var_dump($f);
echo "<br>";