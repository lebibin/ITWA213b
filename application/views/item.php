<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>

<div id="container ">
  <table class='table table-bordered table-hover table-striped'>
    <thead>
      <tr>
        <th class='text-center'>ID</th>
        <th class='text-center'>NAME</th>
        <th class='text-center'>DESCRIPTION</th>
        <th class='text-center'>PRICE</th>
        <th class='text-center'>CONTROLS</th>
      </tr>
    </thead>
 <tbody>
  <?php foreach($items as $item): ?>
  <tr>
    <td class='text-center'><?php echo $item->id;?></td>
    <td class='text-center'><?php echo $item->name;?></td>
    <td class='text-center'><?php echo $item->description;?></td>
    <td class='text-center'><?php echo number_format($item->price, 2); ?></td>
    <td class='text-center'>
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
<div class="well text-right">
  <a href="<?php echo base_url() . 'item/add';?>" class="btn btn-primary">
  <i class="glyphicon glyphicon-plus"></i> Item
  </a>
</div>
</div>

</body>
</html>
