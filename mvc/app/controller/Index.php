<?php

class Index extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function home(){
        $this->load->view('home');
    }
}