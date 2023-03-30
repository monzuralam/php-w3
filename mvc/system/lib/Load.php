<?php
class Load{
    /**
     * Load view template
     *
     * @param [string] $filename
     * @return void
     */
    public function view( $filename ){
        include 'app/views/'.$filename.'.php';
    }
}