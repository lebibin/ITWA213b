<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="row">
  <div class="col-lg-6 col-lg-offset-3">
  <h1 class='text-center'>View item</h1>
  <hr>
    <form action="" method='' class="form-horizontal">
      <div class="form-group">
        <label for="name" class="col-lg-2 control-label">ID</label>
        <div class="col-lg-10">
          <input type="text" disabled class="form-control" name="id" placeholder="ID" value="<?php echo $item->id ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="name" class="col-lg-2 control-label">Name</label>
        <div class="col-lg-10">
          <input type="text" disabled class="form-control" name="name" placeholder="Name" value="<?php echo $item->name?>">
        </div>
      </div>
      <div class="form-group">
        <label for="description" class="col-lg-2 control-label">Description</label>
        <div class="col-lg-10">
          <input type="text" disabled class="form-control" name="description" placeholder="Description" value="<?php echo $item->description; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="price" class="col-lg-2 control-label">Price</label>
        <div class="col-lg-10">
          <input type="text" disabled class="form-control" name="price" placeholder="Price" value="<?php echo $item->price; ?>">
        </div>
      </div>
    </form>
    <hr>
  <a href='<?php echo base_url() . 'item'; ?>' class='pull-right'>&larr; Back</a>
  </div>
</div>
</body>
</html>
