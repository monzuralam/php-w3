<?php
/**
 * Header Section
 */
include 'inc/header.php';
include 'system/lib/Main.php';
include 'system/lib/Controller.php';
include 'system/lib/Load.php';
// Index Controller 
include 'app/controller/Index.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php 
                $main = new Main();
                /**
                 * Index Controller
                 */
                $index = new Index();
                $index->home();
            ?>
        </div>
    </div>
</div>

<?php
/**
 * Footer Section
 */
include 'inc/footer.php';