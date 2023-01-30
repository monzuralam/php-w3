<?php
/**
 * Prepare statement with PDO
 */
include 'inc/header.php';

$dsn = 'mysql:dbname:php;host=localhost';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO( $dsn, $user, $pass );
    // echo "Database connect successfully.";
} catch (\Throwable $th) {
    echo "Database Connection error." . $th->getMessage();
}

$id = 1;
$sql = "SELECT * FROM users WHERE id=:id";
$data = $pdo->prepare( $sql );
// $query->bindValue( ':id', $id );
$data->execute( array( ':id' => $id ));
// print_r( $query );
while( $result = $data->fetch() ){
    echo "<pre>";
    print_r( $result['name'] );
    echo "</pre>";
}

include 'inc/footer.php';