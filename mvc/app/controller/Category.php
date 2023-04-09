<?php
class Category extends Controller{
    public function __construct(){
        parent::__construct();
    }

    /**
     * Category List
     *
     * @return string
     */
    public function categoryList(){
        $data = [];
        $table = 'category';
        $catmodel = $this->load->model( 'CatModel' );
        $data = $catmodel->categoryList( $table );
        $this->load->view( 'category', $data );
    }

    /**
     * Category By ID
     *
     * @return string
     */
    public function catById(){
        $data = [];
        $table = 'category';
        $id = 2;
        $catmodel = $this->load->model( 'CatModel' );
        $data = $catmodel->catById( $table, $id );
        $this->load->view( 'categorybyid', $data );
    }

    /**
     * Add Category View
     *
     * @return void
     */
    public function addcategory(){
        $this->load->view( 'addcategory' );
    }

    /**
     * Add Category Insert mechanism
     *
     * @return void
     */
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

    /**
     * Category Update
     *
     * @return string
     */
    function categoryUpdate(){
        $table = 'category';
        $cond = 'id=1';
        $data = [
            'name'  =>  'Monzur Alam',
            'slug'  =>  'monzuralam',
            'status'=>  1
        ];
        $catmodel = $this->load->model( 'CatModel' );
        $catmodel->categoryUpdate( $table, $data, $cond );
    }

    /**
     * Category Update
     * user can update category by id parameter on url
     * http://php-w3.test/mvc/category/catUpdate?id=4
     *
     * @return string
     */
    public function catUpdate(){
        $table = 'category';
        $id = ( isset( $_REQUEST['id'] ) ) ? $_REQUEST['id'] : "2";
        $catmodel = $this->load->model( 'CatModel' );
        
        if( isset( $_REQUEST['catupdate'] ) ){
            $id = ( isset( $_REQUEST['id'] ) ) ? $_REQUEST['id'] : '';
            $name = ( isset( $_REQUEST['name'] ) ) ? $_REQUEST['name'] : '';
            $slug = ( isset( $_REQUEST['slug'] ) ) ? $_REQUEST['slug'] : '';
            $status = ( isset( $_REQUEST['status'] ) ) ? $_REQUEST['status'] : '';
            
            $cond = "id=$id";
            $data = [
                'name'  =>  $name,
                'slug'  =>  $slug,
                'status'=>  $status
            ];
            $catmodel->categoryUpdate( $table, $data, $cond );
            $this->load->view( 'catupdate', $data );
        }else{
            $data = $catmodel->catById( $table, $id );
            $this->load->view( 'catupdate', $data );
        }
    }

    /**
     * Category Delete By ID
     *
     * @return string
     */
    public function catDeleteById(){
        $table = 'category';
        $cond = "id=11";
        $catmodel = $this->load->model( 'CatModel' );
        echo $catmodel->catDeleteByID( $table, $cond );
    }
}