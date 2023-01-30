<?php

class Calculation{
    public $num1;
    public $num2;

    public function add( $num1, $num2 ){
        echo "Summation : " . $this->$num1 = $num1 + $this->$num2 = $num2 ;
        echo "<br>";
    }

    public function sub( $num1, $num2 ){
        echo "Substraction : " . $this->$num1 = $num1 - $this->$num2 = $num2 ;
        echo "<br>";
    }

    public function mul( $num1, $num2 ){
        echo "Multiplication : " . $this->$num1 = $num1 * $this->$num2 = $num2 ;
        echo "<br>";
    }

    public function div( $num1, $num2 ){
        echo "Division : " . $this->$num1 = $num1 / $this->$num2 = $num2 ;
        echo "<br>";
    }
}