<?php
/**
 * Database Controller
 */
class DatabaseModel{
    protected $db = [];
    public function __construct(){
        $this->db = new Database();
    }
}