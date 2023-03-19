<?php
/**
 * Select Data With PDO-Prepared Statements
 */
include 'inc/header.php';

$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO( $dsn, $user, $pass );
} catch (\Throwable $th) {
    echo "Database Connection error." . $th->getMessage();
}

$id = 4;

/*
$sql = "SELECT * FROM users Where id=:id";
$data = $pdo->prepare( $sql );
$data->execute( array( ":id" => $id ) ); 

$sql = "SELECT * FROM users Where id=?";
$data = $pdo->prepare( $sql );
$data->execute( array( $id ) );
*/

$sql = "SELECT * FROM users Where id=?";
$data = $pdo->prepare( $sql );
$data -> bindValue( 1 , $id );
$data->execute();

if( $data = $data->fetch() ){
    echo "Name: " . $data["name"] . "<br>";
    echo "Position: " . $data["position"] . "<br>";
}

include 'inc/footer.php';