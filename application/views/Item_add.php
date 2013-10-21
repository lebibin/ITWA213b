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
  <h1 class='text-center'>Add new item</h1>
  <hr>
    <form action="<?php echo base_url() . 'item/create'; ?>" method='post' class="form-horizontal">
      <div class="form-group">
        <label for="name" class="col-lg-2 control-label">Name</label>
        <div class="col-lg-10">
          <input type="name" class="form-control" name="name" placeholder="Name" >
        </div>
      </div>
      <div class="form-group">
        <label for="description" class="col-lg-2 control-label">Description</label>
        <div class="col-lg-10">
          <input type="description" class="form-control" name="description" placeholder="Description">
        </div>
      </div>
      <div class="form-group">
        <label for="price" class="col-lg-2 control-label">Price</label>
        <div class="col-lg-10">
          <input type="price" class="form-control" name="price" placeholder="Price">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2"></div>
        <div class="col-lg-10">
          <button type="submit" class='btn btn-primary'>
            <i class="glyphicon glyphicon-plus"></i> Add
          </button>
        </div>
      </div>
    </form>
    <hr>
  <a href='<?php echo base_url() . 'item'; ?>'>&larr; Back</a>
  </div>
</div>
</body>
</html>
