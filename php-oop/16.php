<?php
require_once 'inc/header.php';

/**
 * autoloading
 */
spl_autoload_register( function( $class_name ){
    include "inc/classes/".$class_name.".php";
} );

new Java;
new Php;
new Javascript;

require_once 'inc/footer.php';