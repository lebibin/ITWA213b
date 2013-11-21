<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
  <style>
    body { margin-top: 20px;}
  </style>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
      <?php if(validation_errors() != false): ?>
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Errors</h3>
        </div>
        <div class="panel-body">
          <?php echo validation_errors(); ?>
          <?php
           if(!$this->recaptcha->getIsValid()){
            echo "The CAPTCHA failed.";
           }
          ?>
        </div>
      </div>
      <?php endif; ?>
      </div>
      <div class="clearfix"></div>
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Register an account</h3>
          </div>
          <div class="panel-body">
           <?php echo form_open('registration/verify'); ?>
           <fieldset>
            <div class="form-group">
             <input type="email" placeholder='Email' size="64" id="email" name="email"class='form-control'/>
            </div>
            <div class="form-group">
              <input type="text" placeholder='Username' size="10" id="username" name="username"class='form-control'/>
            </div>
            <div class="form-group">
             <input type="password" placeholder='Password' size="20" id="password" name="password"class='form-control'/>
            </div>
            <div class="form-group">
             <input type="password" placeholder='Password Confirmation' size="20" id="password_confirmation" name="password_confirmation"class='form-control'/>
            </div>
            <div class="form-group">
              <?php echo $recaptcha_html; ?>
            </div>
             <input class="btn btn-lg btn-success btn-block" type="submit" value="Register"/>
            </fieldset>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

