<h2>Cat Update</h2>
<form action="/mvc/category/catUpdate" method="post">
    <input type="hidden" name="id" value="<?php echo ( isset( $data ) ) ? $data[0]['id'] : $data['id']; ?>">
    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter category name here..." value="<?php echo ( isset( $data[0]['name'] ) ) ? $data[0]['name'] : $data['name']; ?>" required>
    </div>
    <div class="form-group">
        <label for="slug">Category Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter category slug here..." value="<?php echo ( isset( $data[0]['slug'] ) ) ? $data[0]['slug'] : $data['slug']; ?>" required>
    </div>
    <div class="form-group">
        <label for="status">Category Status</label>
        <select name="status" id="select" class="form-control">
            <option value="1" <?php echo ( isset( $data[0]['status'] ) ? 'selected' :'' ) ?? ( isset( $data['status'] ) ? ( 1 == $data['status'] ? 'selected' : '' ) : '' ); ?>>Active</option>
            <option value="0" <?php echo ( isset( $data[0]['status'] ) ? 'selected' :'' ) ?? ( isset( $data['status'] ) ? ( 0 == $data['status'] ? 'selected' : '' ) :'' ); ?>>Deactive</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" name="catupdate" class="btn btn-primary">
    </div>
</form>