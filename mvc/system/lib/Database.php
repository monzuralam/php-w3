<?php
/**
 * Database Class
 */
class Database extends PDO{
    public function __construct( $dsn, $user, $pass ){
        parent::__construct( $dsn, $user, $pass );
    }

    public function select( $sql, $data = [], $fetchStyle = PDO::FETCH_ASSOC ){
        $query = $this->prepare( $sql );
        foreach( $data as $key => $value ){
            $query->bindValue( $key, $value );
        }
        $query->execute();
        $result = $query->fetchAll( $fetchStyle );
        return $result;
    }

    /**
     * Insert Category
     *
     * @param [string] $table
     * @param [array] $data
     * @return string
     */
    public function insert( $table, $data ){
        $keys = implode( ', ', array_keys( $data ) );
        $values = ':'. implode( ', :', array_keys( $data ) );
        $sql = "INSERT INTO $table( $keys ) VALUES( $values )";
        $query = $this->prepare( $sql );
        foreach( $data as $key => $value ){
            $query->bindValue( ":$key", $value );
        }
        return $query->execute();
    }

    /**
     * Category Update
     *
     * @param string $table
     * @param array $data
     * @param string $cond
     * @return string
     */
    public function categoryUpdate( $table, $data, $cond ){
        $updateKeys = NULL;
        foreach( $data as $key => $value ){
            $updateKeys .= "$key=:$key,";
        }
        $updateKeys = rtrim( $updateKeys, "," );
        $sql = "UPDATE $table SET $updateKeys WHERE $cond";
        echo $sql;
        $query = $this->prepare( $sql );
        foreach( $data as $key => $value ){
            $query->bindValue( ":$key", $value );
        }
        return $query->execute();
    }

    /*
    public function selectById( $table, $id ){
        $sql = "SELECT * FROM $table Where id=?";
        $query = $this->prepare( $sql );
        $query->bindValue( 1, $id );
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    } */
}