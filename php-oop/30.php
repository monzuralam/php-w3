<?php
/**
 * Factory Design Pettern
 */
include 'inc/header.php';

/**
 * Manage MySQL
 */
class ManageMySQL{
    public $host, $db, $user, $pass;

    public function setHost( $host ){
        $this->host = $host;
    }

    public function setDb( $db ){
        $this->db = $db;
    }

    public function setUser( $user ){
        $this->user = $user;
    }

    public function setPass( $pass ){
        $this->pass = $pass;
    }

    public function connect(){
        $conn = new mysqli( $this->host, $this->user, $this->pass, $this->db );
        if( $conn ){
            echo "Database Connection Successfully.";
        }else{
            echo "Database connecton error" . mysqli_connect_error();
        }
    }
}

/**
 * Manage SQLite
 */
class ManageSQLite{
    public $host, $db, $user, $pass;

    public function setHost( $host ){
        $this->host = $host;
    }

    public function setDb( $db ){
        $this->db = $db;
    }

    public function setUser( $user ){
        $this->user = $user;
    }

    public function setPass( $pass ){
        $this->pass = $pass;
    }

    public function connect(){
        $conn = new mysqli( $this->host, $this->user, $this->pass, $this->db );
        if( $conn ){
            echo "Database Connection Successfully.";
        }else{
            echo "Database connecton error" . mysqli_connect_error();
        }
    }
}

/**
 * Manage Database
 */
class Database{
    public $driver;
    public $link;
    
    public function setDriver( $driver ){
        $this->driver = $driver;
    }

    public function connect(){
        if( $this->driver == 'mysql' ){
            $manageMySQL = new ManageMySQL();
            $manageMySQL->setHost( 'localhost' );
            $manageMySQL->setDb( 'php' );
            $manageMySQL->setUser( 'root' );
            $manageMySQL->setPass( '' );
            $this->link = $manageMySQL->connect();
        } else if( $this->driver == 'sqlite' ){
            $manageMySQL = new ManageSQLite();
            $manageMySQL->setHost( 'localhost' );
            $manageMySQL->setDb( 'php' );
            $manageMySQL->setUser( 'root' );
            $manageMySQL->setPass( '' );
            $this->link = $manageMySQL->connect();
        }else{
            
        }
    }
}

/**
 * Call Databse
 */
$db = new Database();
$db->setDriver( 'mysql' );
$db->connect();

include 'inc/footer.php';