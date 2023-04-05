<h2>Insert Category</h2>
<form action="/mvc/category/categoryInsert" method="post">
    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter category name here..." required>
    </div>
    <div class="form-group">
        <label for="slug">Category Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter category slug here..." required>
    </div>
    <div class="form-group">
        <label for="status">Category Status</label>
        <select name="status" id="select" class="form-control">
            <option value="1">Active</option>
            <option value="0">Deactive</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<?php if( isset( $data ) ){ ?>
    <div class="alert alert-<?php echo ( isset( $data['success'] ) ) ? 'success' : 'danger'; ?>">
        <?php  echo ( isset( $data['success'] ) ) ? $data['success'] : $data['error']; ?>
    </div>
<?php } ?>