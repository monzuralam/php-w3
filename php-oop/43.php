<?php
/**
 * Prepare statement with PDO
 */
include 'inc/header.php';

$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO( $dsn, $user, $pass );
    // echo "Database connect successfully.";
} catch (\Throwable $th) {
    echo "Database Connection error." . $th->getMessage();
}

$id = null;
$name = "Alam";
$position = "WordPress Developer";
$skill = "WordPress, PHP,mySql, jQuery";

/*
$sql = "INSERT INTO users( id, name, position, skill ) Values( :id, :name, :position, :skill )";
$data = $pdo->prepare( $sql );
$data->bindParam( ':id', $id );
$data->bindParam( ':name', $name );
$data->bindParam( ':position', $position );
$data->bindParam( ':skill', $skill );
$data->execute(); 
*/

$sql = "INSERT INTO users( id, name, position, skill ) Values( ?, ?, ?, ? )";
$data = $pdo->prepare( $sql );
$arr = array( $id, $name, $position, $skill );
$query = $data->execute( $arr );

if( $query ){
    echo "Data has been Inserted successfully.";
}

include 'inc/footer.php';