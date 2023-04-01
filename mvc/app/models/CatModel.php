<?php
/**
 * Category Model
 */
class CatModel extends DatabaseModel{
    public function categoryList(){
        $sql = "SELECT * FROM category";
        $query = $this->db->query( $sql );
        $result = $query->fetchAll();
        return $result;
    }
}