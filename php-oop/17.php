<?php
require_once 'inc/header.php';

/**
 * Method chaining
 */
spl_autoload_register( function( $class_name ){
    include "inc/classes/".$class_name.".php";
} );

$php = new Php;

$php->year()->info();

require_once 'inc/footer.php';