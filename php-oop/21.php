<?php
require_once 'inc/header.php';

/**
 * __Class__ & get_class()
 */

abstract class PHP{
    public function info(){
        echo "Base class name : " . __CLASS__ . '<br>';
        echo "Base class function name : " . get_class( $this ) . "<br>";
        echo "------------------------------------------------------<br>";
    }
}

class childphp extends PHP{
    public function childinfo(){
        echo "Child class name : " . __CLASS__ . "<br>";
        echo "Child class function name : " . get_class( $this ) . "<br>";
    }
}

$c = new childphp;
$c->info();
$c->childinfo();

require_once 'inc/footer.php';