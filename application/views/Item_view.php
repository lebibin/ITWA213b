<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>

<div class='well'>
  <div class="row">
    <div class="col-lg-3">
      <h1>Name: <?php echo $item->name; ?></h1>
      <p>Description: <?php echo $item->description; ?></p>
      <div class="input-group">
        Price:
        <span class="input-group-addon">$</span>
        <input type="text" class="form-control" value="<?php echo number_format($item->price, 2); ?>"placeholder="Username" disabled>
      </div>
    </div>
  </div>
  <hr>
  <a href='<?php echo base_url() . 'item'; ?>'>&larr; Back</a>
</div>

</body>
</html>
