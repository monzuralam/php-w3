<?php 
/**
 * Select statement with prepare
 */
include 'inc/header.php';


$conn = new mysqli( 'localhost', 'root', '', 'php' );
$sql = "SELECT name, position FROM Users";
$result = $conn->prepare( $sql );
$result->execute();
$result->bind_result( $name, $position );

?>
    <table border="1">
        <thead>
            <tr>
                <td>Name</td>
                <td>Position</td>
            </tr>
        </thead>
        <tbody>
            <?php while( $result->fetch() ): ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $position; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php

include 'inc/footer.php';