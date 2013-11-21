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
      <?php if(validation_errors() != false): ?>
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Errors</h3>
        </div>
        <div class="panel-body">
          <?php echo validation_errors(); ?>
        </div>
      </div>
      <?php endif; ?>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Please sign in</h3>
          </div>
          <div class="panel-body">
           <?php echo form_open('login/verify'); ?>
           <fieldset>
            <div class="form-group">
              <input type="text" placeholder='Username' size="10" id="username" name="username"class='form-control'/>
            </div>
            <div class="form-group">
             <input type="password" placeholder='Password' size="20" id="passowrd" name="password"class='form-control'/>
            </div>
             <input class="btn btn-lg btn-success btn-block" type="submit" value="Login"/>
            </fieldset>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

