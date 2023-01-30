<?php
/**
 * blob with prepare statement
 */
include "inc/header.php";

$db = new mysqli( 'localhost', 'root', '', 'php' );

if( mysqli_connect_errno() ){
    echo "Database connection error.";
    exit;
}

// $sql = "INSERT INTO img(photo) values( ? )";
// $query = $db->prepare( $sql );
// $query->bind_param( 'b', $photo );
// $photo = file_get_contents( "assets/images/logo.png" );
// $query->send_long_data( 0, $photo );
// $query->execute();
// $query->close();
// $db->close();

$sql = "SELECT photo from img WHERE id=?";
$query = $db->prepare( $sql );
$query->bind_param( 'i', $id );
$id = 1 ;
$query->execute();
$query->bind_result( $photo );
$query->fetch();
header( 'content-type: png' );
echo '<img src="data:image/png;base64,'.base64_encode($photo).'" />';

include "inc/footer.php";