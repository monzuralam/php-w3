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
    echo "Connection Success.<br>";
}

$sql = "SELECT * FROM users";
$result = $conn->query( $sql );

while( $data = $result->fetch_object() ){
    echo $data->name . "->" . $data->position . "<br>";
}

include "inc/footer.php";