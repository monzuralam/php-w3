<?php

class Index extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function home(){
        $this->load->view('home');
    }

    public function category(){
        $data = [];
        $catmodel = $this->load->model( 'CatModel' );
        $data = $catmodel->categoryList();
        $this->load->view( 'category', $data );
    }
}