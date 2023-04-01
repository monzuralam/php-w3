<?php
/**
 * Database Class
 */
class Database extends PDO{
    public function __construct(){
        $dsn = 'mysql:dbname=php;host=localhost;';
        $user = 'root';
        $pass = '';
        parent::__construct( $dsn, $user, $pass );
    }
}