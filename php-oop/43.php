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
    echo "Database connect successfully.";
} catch (\Throwable $th) {
    echo "Database Connection error." . $th->getMessage();
}

$id = null;
$name = "MonzurAlam";
$position = "WordPress Developer";
$skill = "WordPress, PHP,mySql, jQuery, Docker, kubernet";
$sql = "INSERT INTO users( id, name, position, skill ) Values( :id, :name, :position, :skill )";
$data = $pdo->prepare( $sql );
$data->bindParam( ':id', $id );
$data->bindParam( ':name', $name );
$data->bindParam( ':position', $position );
$data->bindParam( ':skill', $skill );
$data->execute();


include 'inc/footer.php';