<?php
/**
 * Users
 */
class Query{
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
}