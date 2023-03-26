<?php
/**
 * Autoload class
 */
spl_autoload_register( function( $class ) {
    include 'classes/' . $class . '.php';
} );

/**
 * Header Template
 */
include 'inc/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-4">
                <h2>PHP CRUD</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <form method="POST" action="">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Here...">
                </div>
                <div class="form-group">
                    <input type="text" name="position" class="form-control" id="position" placeholder="Enter Job Position Here...">
                </div>
                <div class="form-group">
                    <input type="text" name="skill" class="form-control" id="skill" placeholder="Enter Skill Here...">
                </div>
                <button type="submit" name="insert" class="btn btn-primary">Submit</button>
            </form>
            <?php
                /**
                 * Insert Data
                 */
                if( isset( $_POST['insert'] ) ){
                    $name = $_POST['name'];
                    $position = $_POST['position'];
                    $skill = $_POST['skill'];

                    Query::setName( $name );
                    Query::setPosition( $position );
                    Query::setSkill( $skill );
                    echo Query::insert();
                }
            ?>
        </div>
        <div class="col-8">
            <div class="table-responsive mt-1">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Skill</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach( Query::ReadAll() as $key => $value ){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $value['id']; ?></th>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo $value['position']; ?></td>
                                    <td><?php echo $value['skill']; ?></td>
                                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<?php
/**
 * Footer Template
 */
include 'inc/footer.php';