<?php
/**
 * Database Class
 */
class Database extends PDO{
    public function __construct( $dsn, $user, $pass ){
        parent::__construct( $dsn, $user, $pass );
    }

    public function select( $table ){
        $sql = "SELECT * FROM $table";
        $query = $this->prepare( $sql );
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function selectById( $table, $id ){
        $sql = "SELECT * FROM $table Where id=?";
        $query = $this->prepare( $sql );
        $query->bindValue( 1, $id );
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
}