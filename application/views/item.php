<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>

<div id="container">
  <table class='table table-bordered table-hover table-striped'>
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
        <th>PRICE</th>
        <th>CONTROLS</th>
      </tr>
    </thead>
 <tbody>
  <?php foreach($items as $item): ?>
  <tr>
    <td><?php echo $item->id;?></td>
    <td><?php echo $item->name;?></td>
    <td><?php echo $item->description;?></td>
    <td><?php echo number_format($item->price, 2); ?></td>
    <td>
      <a href='<?php echo base_url() . 'item/view/' . $item->id; ?>' class='btn btn-xs btn-success'>
        <i class="glyphicon glyphicon-info-sign"></i>
      </a>
      <a href='<?php echo base_url() . 'item/edit/' . $item->id; ?>' class='btn btn-xs btn-primary'>
        <i class="glyphicon glyphicon-edit"></i>
      </a>
      <a href='<?php echo base_url() . 'item/delete/' . $item->id; ?>' class='btn btn-xs btn-danger'>
        <i class="glyphicon glyphicon-trash"></i>
      </a>
    </td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
<div class="well">
  <a href="#" class="btn btn-primary">Add</a>
</div>
</div>

</body>
</html>
