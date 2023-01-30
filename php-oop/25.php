<?php
require_once 'inc/header.php';

/**
 * Array iterator
 */

$lang = [ 'HTML', 'CSS', 'Bootstrap', 'JavaScript', 'jQuery', 'PHP', 'MySQL', 'WordPress' ];
$arr = new ArrayObject( $lang );

$iterator = $arr->getIterator();
while( $iterator->valid() ){
    echo $iterator->current() . "<br>";
    $iterator->next();
}

require_once 'inc/footer.php';