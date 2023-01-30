<?php
/**
 * SQL Query with Prepare statement
 */
include "inc/header.php";

$db = new mysqli( "localhost", "root", "", "php" );

if( mysqli_connect_errno() ){
    echo "Database connection error.<br>";
}else{
    echo "Database connection success.<br>";
}

$sql = "SELECT name, skill FROM users";

$result = $db->prepare( $sql );
$result->execute();
$result->bind_result( $name, $skill );
?>
    <table border="1">
        <thead>
            <tr>
                <td>Name</td>
                <td>Skill</td>
            </tr>
        </thead>
        <tbody>
        <?php
            while( $result->fetch() ){
        ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $skill; ?></td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
<?php

include "inc/footer.php";