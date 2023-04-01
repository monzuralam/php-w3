<?php
echo "<h2>Category</h2>";
echo "<hr>";
foreach( $data as $key => $value ){
    echo $value['name'] . "<br>";
}