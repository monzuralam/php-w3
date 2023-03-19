<?php
/**
 * Update data & delele
 */
include 'inc/header.php';

$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO( $dsn, $user, $pass );
} catch (\PDOException $th) {
    echo "Database Connection error." . $th->getMessage();
}

/* 
$id = 1;
$name = 'Ahasan Kabir';
$postion = 'Web Developer';
$skill = 'HTML, CSS, JavaScript, jQuery, PHP, MySQL';

$sql = "UPDATE users SET name=?, position=?, skill=? Where id=?";
$data = $pdo->prepare( $sql );
$data -> bindValue( 1 , $name );
$data -> bindValue( 2 , $postion );
$data -> bindValue( 3, $skill );
$data -> bindValue( 4 , $id );
$query = $data->execute();

if( $query ){
    echo "Data has been updated successfully.";
} else{
    echo "Something wrong! Please try again.";
}
*/

$id = 2;
$sql = "DELETE FROM users Where id=?";
$data = $pdo->prepare( $sql );
$query = $data->execute( array( $id ) );

if( $query ){
    echo "Data has been Deleted successfully.";
} else{
    echo "Something wrong! Please try again.";
}

include 'inc/footer.php';