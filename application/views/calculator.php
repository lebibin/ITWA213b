<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="http://bootswatch.com/2/cerulean/bootstrap.min.css">
</head>
<body>

<div class="container well text-center" style='margin-top: 150px;'>
  <div class="span12">
  <h1>Basic Calculator</h1>

  <hr>
  </div>
  <hr>
  <div class="span12">
    <form class='form' action="calculator" method='post'>
      <div class="controls">
        <input type="text" placeholder='num1' class='span1' name='num1' value='<?php echo $num1; ?>'>
        <input type="text" placeholder='num2' class='span1' name='num2' value='<?php echo $num2; ?>'>
      </div>
      <div class="controls">
        <button class='btn btn-primary btn-large' type="submit" name='operation' value="+">&#43;</button>
  <!--       <button class='btn btn-primary  btn-large' type="submit" name='operation' value="-">-</button>
      <button class='btn btn-primary  btn-large' type="submit" name='operation' value="*">&times;</button>
      <button class='btn btn-primary  btn-large' type="submit" name='operation' value="/">&#247;</button>
 -->
      <button type="submit" name='operation' value="reset" class='btn btn-primary btn-large'>&#8634;</button>
      </div>

    </form>
  </div>
  <div class="span12">
    <hr>
    <h4>
      <?php
        if($result != '')
          echo $result;
        else
          echo ''
      ?>
    </h4>
  </div>
</div>

</body>
</html>
