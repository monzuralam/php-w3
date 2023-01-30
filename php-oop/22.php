<?php
require_once 'inc/header.php';

/**
 * Late static binding in php-oop
 */

// base class
class php{
    public static function framework(){
        echo static::getClass();
        echo '<br>';
    }

    public static function getClass(){
        return __CLASS__;
    }
}

// child class
class childPhp extends php{
    public static function getClass(){
        return __CLASS__;
    }
}

$p = new php;
$p->framework();

$c = new childPhp;
$c->framework();

require_once 'inc/footer.php';