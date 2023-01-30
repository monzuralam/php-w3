<?php
/**
 * MySQL prepare statement with variable
 */
include "inc/header.php";

$db = new mysqli( 'localhost', 'root', '', 'php' );

if( mysqli_connect_errno() ){
    echo "Database connection error.<br>";
}

$sql = "INSERT INTO users( name, position, skill) values( ?, ?, ? )";
$query = $db->prepare( $sql );
$query->bind_param( 'sss', $name, $position, $skill );

$name = 'Rayhan Kabir';
$position = 'IT Officer';
$skill = 'Basic IT Support';

$query->execute();
$query->close();
$db->close();

include "inc/footer.php";