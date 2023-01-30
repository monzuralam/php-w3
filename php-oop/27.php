<?php
require_once 'inc/header.php';

/**
 * PHP Data serialization & unserialization
 */
class Development{
    public $html;
    public $css;
    public $js;

    private $php;
    protected $laravel;

    public function __construct(){
        $this->html     = "Hyper text markup language";
        $this->css      = "Cascading Stylesheet";
        $this->js       = "JavaScript";
        $this->php      = "Hypertext preprocesor";
        $this->laravel  = "Laravel";
    }
}

$dev = new Development;
$serialize = serialize( $dev );
file_put_contents( 'dev.txt', $serialize );

$getcontent = file_get_contents( 'dev.txt' );
$getcontent = unserialize( $getcontent );
echo "<pre>";
print_r( $getcontent );


require_once 'inc/footer.php';