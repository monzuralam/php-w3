<?php
/**
 * Category Model
 */
class CatModel extends DatabaseModel{
    public function categoryList(){
        return $this->db->select( 'category' );
    }

    public function catById( $table, $id ){
        return $this->db->selectById( $table, $id );
    }
}