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
        $table = 'category';
        $catmodel = $this->load->model( 'CatModel' );
        $data = $catmodel->categoryList( $table );
        $this->load->view( 'category', $data );
    }

    public function catById(){
        $data = [];
        $table = 'category';
        $id = 2;
        $catmodel = $this->load->model( 'CatModel' );
        $data = $catmodel->catById( $table, $id );
        $this->load->view( 'categorybyid', $data );
    }

    public function categoryInsert(){
        $table = 'category';
        $data = [
            'name'  =>  'Framework',
            'slug'  =>  'framework',
            'status'=>  1,
        ];
        $catmodel = $this->load->model( 'CatModel' );
        $data = $catmodel->categoryInsert( $table, $data );
    }
}