<?php
require_once 'inc/header.php';

/**
 * Trait
 */

trait Hello{
    public function info(){
        return 'Assalamualikum, <br> I am rootcode. -:) <br> come form php oop trait';
    }
}

trait PHP{
    public function msg(){
        return "<br>I love PHP";
    }
}



class Details{
    use Hello, PHP;   
}
$n = new Details;
echo $n->info();
echo $n->msg();

require_once 'inc/footer.php';