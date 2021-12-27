<?php
/**
 * Local
 * Global
 * Static
 */

// Local scope
function localScope(){
    $a = 10; // local scope
    return $a;
}
echo localScope();

// Global scope
$a = 15;
function globalScope(){
    return $a; //error generate
}
echo globalScope();
echo $a;
echo "<br>";

// Static
function staticScope(){
    static $b = 0;
    echo $b . "<br>";
    $b++;
}
staticScope();
staticScope();
staticScope();