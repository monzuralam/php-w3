<?php
/**
 * Header Section
 */
include 'inc/header.php';
include 'system/lib/Main.php';
include 'system/lib/Controller.php';
include 'system/lib/Load.php';
$main = new Main();
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php 
                $url = ( isset( $_REQUEST['url'] ) ) ? $_REQUEST['url'] : '';
                if( $url != NULL ){
                    $url = rtrim( $url, '/' );
                    $url = explode( '/', $url );
                }else{
                    unset( $url );
                }

                if( isset( $url[0] ) ){
                    $className = ucfirst( $url[0] );
                    $method = ( isset( $url[1] ) ) ? $url[1] : NULL;
                    $parameter = ( isset( $url[2] ) ) ? $url[2] : NULL;
                    include 'app/controller/'.$className.'.php';
                    $controller = new $className();
                    if( $parameter ){
                        $controller->$method( $parameter );
                    }else{
                        if( $method ){
                            $controller->$method();
                        }
                    }
                }else{
                    // Index Controller 
                    include 'app/controller/Index.php';
                    /**
                     * Index Controller
                     */
                    $index = new Index();
                    $index->home();
                }
            ?>
        </div>
    </div>
</div>

<?php
/**
 * Footer Section
 */
include 'inc/footer.php';