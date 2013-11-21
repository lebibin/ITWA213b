<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
  <style>
    body { margin-top: 100px;}
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Home</h3>
          </div>
          <div class="panel-body">
            <p>Welcome <?php echo $username; ?>!</p>
          </div>
          <div class="panel-footer">
            <a href="home/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
 </body>
</html>

