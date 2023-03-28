<?php
/**
 * Autoload file
 */
spl_autoload_register( function( $class ){
    include 'model/' . $class . '.php';
} );

/**
 * Controller
 */
class Controller{
    public $model;    

    public function __construct(){
        $this->model = new Model();
    }

    public function home(){
        $users = $this->model->getUserData();
        include 'view/home.php';
    }
}