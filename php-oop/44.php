<?php
/**
 * bindParam() & bindValue()
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

$id = null;
$name = "Shahin Alam";
$position = "WordPress Developer";
$skill = "WordPress, PHP";

$sql = "INSERT INTO users( id, name, position, skill ) Values( :id, :name, :position, :skill )";
$data = $pdo->prepare( $sql );
$data->bindValue( ':id', $id );
$data->bindValue( ':name', $name );
$data->bindValue( ':position', $position );
$data->bindValue( ':skill', 'PHP' );
$query = $data->execute(); 

if( $query ){
    echo "Data has been Inserted successfully.";
}

include 'inc/footer.php';