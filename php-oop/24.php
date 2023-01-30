<?php
require_once 'inc/header.php';

/**
 * deep clone by magic method __clone
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

    public function __clone(){
        $clone = new info;
        $clone->setFramework( $this->framework );
        return $clone;
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