<?php
require_once 'inc/header.php';

/**
 * Standard PHP Library
 */

$lang = ['HTML', 'CSS', 'JavaScript', 'jQuery', 'PHP', 'WordPress'];

$data = new ArrayObject( $lang );
$iterator = $data->getIterator();
$limit = new LimitIterator( $iterator, 0, 2 );
$ci = new CachingIterator( $iterator );

// limit iterator
echo 'Limit iterator: <br>';
foreach( $limit as $value ){
    echo $value;
}

// caching iterator
echo '<br>CachingIterator: <br>';
foreach( $ci as $value ){
    echo $value;
    if( $ci->hasNext() ){
        echo ', ';
    }
}

require_once 'inc/footer.php';