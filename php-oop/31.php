<?php
/**
 * Abstract Factory Design Pattern
 */
include 'inc/header.php';

/**
 * Abstract class
 */
abstract class Database{
    public $host, $user, $pass, $db;

    public function setHost( $host ){
        $this->host = $host;
    }
    public function setUser( $user ){
        $this->user = $user;
    }
    public function setPass( $pass ){
        $this->pass = $pass;
    }
    public function setDb( $db ){
        $this->db = $db;
    }

    public function connect(){
        $conn = new mysqli( $this->host, $this->user, $this->pass, $this->db );
        if( $conn ){
            echo "Connection Success.";
        }else{
            echo "Connection Failed." . mysqli_connect_errno();
        }
    }

    public function query(){

    }
}

class Category extends Database{

    public function query(){
        // Category query here
    }
}

$db = new Category();
$db->setHost( 'localhost' );
$db->setUser( 'root' );
$db->setPass( '' );
$db->setDb( 'php' );
$db->connect();


class SingleProduct extends Database{
    public function query(){
        // Single product query here
    }
}

include 'inc/footer.php';