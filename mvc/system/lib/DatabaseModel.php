<?php
/**
 * Database Controller
 */
class DatabaseModel{
    protected $db = [];
    public function __construct(){
        $dsn = 'mysql:dbname=php;host=localhost;';
        $user = 'root';
        $pass = '';
        $this->db = new Database( $dsn, $user, $pass );
    }
}