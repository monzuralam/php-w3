<?php
require_once 'inc/header.php';

/**
 * Object Iterator
 */

class Pen{
    public $name = 'Matador';
    public $price = '10tk';
    public $country = 'BD';

    private $buyprice = '8tk';
    protected $seller = 'Monzur Alam';

    public function insideClass(){
        echo 'Inside Class:';
        echo "<pre>";
        foreach( $this as $key => $value ){
            echo $key . '=>' . $value . '<br>';
        }
        echo "</pre>";
    }
}

$new = new Pen;
echo "<pre>";
foreach( $new as $key => $value ){
    echo $key . ' => ' . $value . '<br>';
}
echo "</pre>";

$new->insideClass();

require_once 'inc/footer.php';