<?php
/**
 * Header
 */
include 'inc/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive mt-1">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Skill</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach( $users as $key => $value ):
                        ?>
                        <tr>
                            <th scope="row"><?php echo ( isset( $value['id'] ) ) ? $value['id'] : ''; ?></th>
                            <td><?php echo ( isset( $value['name'] ) ) ? $value['name'] : ''; ?></td>
                            <td><?php echo ( isset( $value['position'] ) ) ? $value['position'] : ''; ?></td>
                            <td><?php echo ( isset( $value['skill'] ) ) ? $value['skill'] : ''; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<?php
include 'inc/footer.php';
