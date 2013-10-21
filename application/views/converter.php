<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Converter</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css>
</head>
<body>

<div class="container text-center" style='margin-top: 150px;'>
  <div class="span12">
  <h1>Converter</h1>
  </div>
  <div class='col-lg-6 col-lg-offset-3 well'>
    <form action="converter" class='form-horizontal' method='post'>
    <div class="form-group">
      <label for="number" class="col-lg-2 control-label">Number</label>
      <div class="col-lg-10">
        <input name='number' type="text" placeholder="Number to convert" class='form-control'value='<?php if($msg != '' && $result != 0){ echo($result); } ?>' >
      </div>
    </div>
    <div class="form-group">
      <label for="format" class="col-lg-2 control-label">Format</label>
      <div class="col-lg-10 text-left">
        <label class="radio-inline">
          <input class='radio' type="radio" name='format' value='decimal' <?php if($msg == '' || $format == 'decimal') {echo 'checked';};?>> Binary &rarr; Decimal
        </label>
        <label class="radio-inline">
          <input class='radio' type="radio" name='format' value='binary' <?php if($format == 'binary'){echo 'checked';};?>> Decimal &rarr; Binary
        </label>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-2"></div>
      <div class="col-lg-10 text-left">
        <input type="submit" class='btn btn-primary'>
        <a class='btn btn-default' href='converter'>Reset</a>
      </div>
    </div>

    </form>
  </div>
</div>

</body>
</html>
