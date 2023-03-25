<?php
define( 'HOST', 'localhost' );
define( 'DATABASE', 'php' );
define( 'USER', 'root' );
define( 'PASSWORD', '' );

class DB{
    private static $pdo;
    public static function connection(){
        if( ! isset( self::$pdo ) ){
            try {
                self::$pdo = new PDO( 'mysql:dbname' . DATABASE . ';host:' . HOST.';' , USER, PASSWORD);
            } catch (\PDOException $th) {
                echo "Database Connection error." . $th->getMessage();
            }
        }
        return self::$pdo;
    }
}