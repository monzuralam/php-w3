<?php
abstract class Main{
    /**
     * Insert Method
     */
    public static function insert( $table ){

    }

    /**
     * Update Method
     */
    public static function update( $table ){

    }

    /**
     * Read by ID
     */
    public static function fetchById( $id, $table = 'users' ){
        $sql = "SELECT * FROM $table WHERE id = ?";
        $query = DB::prepare( $sql );
        $query->bindValue( 1, $id );
        $query->execute();
        $result = $query->fetch();
        return $result;
    }

    /**
     * Read All Data in any table
     * 
     * @param dbtable_name
     */
    public static function ReadAll( $table = 'users' ){
        $sql = "SELECT * FROM $table;";
        $query = DB::prepare( $sql );
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    /**
     * Delete Data
     */
    public static function delete( $id, $table = 'users' ){
        $sql = "DELETE FROM $table Where id=?";
        $query = DB::prepare( $sql );
        $query->bindValue( 1, $id );
        $delete = $query->execute();
        if( $delete ){
            return 'Deleted.';
        }
    }
}