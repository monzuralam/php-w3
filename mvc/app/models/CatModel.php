<?php
/**
 * Category Model
 */
class CatModel extends DatabaseModel{
    /**
     * Category Model
     *
     * @param [string] $table
     * @return string
     */
    public function categoryList( $table ){
        $sql = "SELECT * FROM $table";
        return $this->db->select( $sql );
    }

    /**
     * Category Query with ID
     *
     * @param [string] $table
     * @param [int] $id
     * @return string
     */
    public function catById( $table, $id ){
        $sql = "SELECT * FROM $table Where id=:id";
        $data = [ ':id' => $id ]; 
        return $this->db->select( $sql, $data );
    }

    /**
     * Category Insert
     *
     * @param [string] $table
     * @param [array] $data
     * @return string
     */
    public function categoryInsert( $table, $data ){
        return $this->db->insert( $table, $data );
    }

    public function categoryUpdate( $table, $data, $cond ){
        return $this->db->categoryUpdate( $table, $data, $cond );
    }
}