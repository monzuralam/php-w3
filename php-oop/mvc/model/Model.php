<?php
/**
 * load database file
 */
include( "classes/DB.php" );

/**
 * Model
 */
class Model{
    public function getUserData(){
        $sql = "SELECT * FROM users";
        $query = DB::prepare( $sql );
        $query->execute();
        return $query->fetchAll();
    }
}