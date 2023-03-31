<?php
class Load{
    /**
     * Load view template
     *
     * @param [string] $filename
     * @return void
     */
    public function view( $filename, $data = NULL ){
        include 'app/views/'.$filename.'.php';
    }

    public function model( $className, $data = NULL ){
        include 'app/models/'.$className.'.php';
        return new $className();
    }
}