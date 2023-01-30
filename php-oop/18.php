<?php
require_once 'inc/header.php';

/**
 * Type hinting
 */

class Calculation{

    public function get_value( array $x ){
        foreach( $x as $value ){
            echo $value[0];
            echo " : ";
            echo $value[1]*$value[2] . "<br>";
        }
    }
}

$c = new Calculation;
$c->get_value();

require_once 'inc/footer.php';