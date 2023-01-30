<?php
require_once 'inc/header.php';
require_once 'inc/functions.php';
?>
<form action="" method="POST" class="form">
    <table>
        <tr>
            <td>Enter First Number:</td>
            <td><input type="number" name="first" id="" class="form-control"></td>
        </tr>
        <tr>
            <td>Enter Second Number:</td>
            <td><input type="number" name="second" id="" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" name="calculation" class="btn btn-primary mt-2"></td>
        </tr>
    </table>
</form>
<?php
/**
 * Submit button action
 */
if( isset( $_REQUEST['calculation'] ) ){
    $num1 = $_REQUEST['first'];
    $num2 = $_REQUEST['second'];

    if( empty ( $num1 ) || empty ( $num2 ) ){
        echo "Field Must not be Empty!!!";
    }else{
        $cal = new Calculation;
        $cal->add( $num1, $num2 );
        $cal->sub( $num1, $num2 );
        $cal->mul( $num1, $num2 );
        $cal->div( $num1, $num2 );
    }
}

require_once 'inc/footer.php';