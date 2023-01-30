<?php
/**
 * PDO init
 */
include 'inc/header.php';

$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO( $dsn, $user, $pass );
} catch (\Throwable $th) {
    echo "Connection failed ". $th->getMessage();
}

$sql = "SELECT * FROM users";
$result = $pdo->query( $sql );
foreach( $result as $value ){
    echo $value['name'] . "<br>";
}

include 'inc/footer.php';