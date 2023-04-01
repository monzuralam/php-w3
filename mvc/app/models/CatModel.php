<?php
/**
 * Category Model
 */
class CatModel extends DatabaseModel{
    public function categoryList(){
        return $this->db->select( 'category' );
    }
}