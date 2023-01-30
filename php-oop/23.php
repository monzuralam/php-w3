<?php
require_once 'inc/header.php';

/**
 * object cloning in php-oop
 */

// base class
class info{
    private $category;
    private $framework;

    public function setCat( $a ){
        $this->category = $a;
    }

    public function getCat(){
        return $this->category;
    }

    public function setFramework( $b ){
        $this->framework = $b;
    }

    public function getFramework(){
        return $this->framework;
    }
}

$n = new info;
$n->setCat( 'PHP' );
$n->setFramework( 'Laravel' );

$c = clone $n; // clone object
$c->setCat( 'JavaScript' );
$c->setFramework( 'React Js' );

echo $n->getCat();
echo '<br>';
echo $n->getFramework();
echo '<br>';

echo $c->getCat();
echo '<br>';
echo $c->getFramework();


require_once 'inc/footer.php';