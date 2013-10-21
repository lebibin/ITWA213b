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
  <h1 class='text-center'>Editing record for "<?php echo $item->name; ?>"</h1>
    <form action="<?php echo base_url() . 'item/edit_save/' . $item->id; ?>" method='post' class="form-horizontal">
      <div class="form-group">
        <label for="name" class="col-lg-2 control-label">Name</label>
        <div class="col-lg-10">
          <input type="name" class="form-control" id="name" placeholder="Name" value="<?php echo $item->name?>">
        </div>
      </div>
      <div class="form-group">
        <label for="description" class="col-lg-2 control-label">Description</label>
        <div class="col-lg-10">
          <input type="description" class="form-control" id="description" placeholder="Description" value="<?php echo $item->description; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="description" class="col-lg-2 control-label">Price</label>
        <div class="col-lg-10">
          <input type="price" class="form-control" id="description" placeholder="Price" value="<?php echo $item->price; ?>">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2"></div>
        <div class="col-lg-10">
          <button type="submit" class='btn btn-primary'>
            <i class="glyphicon glyphicon-save"></i> Save
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
