<?php
/**
 * Database Conection with OOP
 */
include "inc/header.php";

$conn = new mysqli( 'localhost', 'root', '', 'php' );

if( mysqli_connect_errno() ){
    echo "Database Connection error.<br>";
    exit;
}else{
    echo "Connection Success.";
}

include "inc/footer.php";