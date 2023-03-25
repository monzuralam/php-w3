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

// Connection
DB::connection();
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
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Enter Name Here...">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="position" placeholder="Enter Job Position Here...">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="skill" placeholder="Enter Skill Here...">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Monzur</td>
                            <td>WordPress Developer</td>
                            <td>PHP, MySQL</td>
                            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
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