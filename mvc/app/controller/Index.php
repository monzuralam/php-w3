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

    public function addcategory(){
        $this->load->view( 'addcategory' );
    }

    public function categoryInsert(){
        $table = 'category';
        $name   = ( isset( $_POST['name'] ) ) ? $_POST['name'] : NULL;
        $slug   = ( isset( $_POST['slug'] ) ) ? $_POST['slug'] : NULL;
        $status = ( isset( $_POST['status'] ) ) ? $_POST['status'] : 0 ;
        $data = [
            'name'  =>  $name,
            'slug'  =>  $slug,
            'status'=>  $status,
        ];
        $catmodel = $this->load->model( 'CatModel' );
        $result = $catmodel->categoryInsert( $table, $data );
        
        if( 1 == $result ) {
            $data['success'] = 'Category has been added successfully.';
        }{
            $data['error'] = 'Category hasn\'t inserted. Please try again.';
        }
        
        $this->load->view( 'addcategory', $data );
    }
}