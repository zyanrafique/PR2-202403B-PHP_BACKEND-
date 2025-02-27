<?php
include("query.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  .container {
      max-width: 500px;
      margin-top: 50px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      padding: 20px;
      border-radius: 8px;
  }
  .form-control {
      margin-bottom: 10px;
  }
  .btn-info {
      width: 100%;
  }
  h3 {
      color: #333;
  }
  label {
      font-weight: 500;
  }
</style>
</head>
<body>
    
<div class="container">
<h3 class="text-center p-3">Register Form</h3>
  <form action="" method="POST">
<div class="form-group">
<label for="" class="p-2">Name:</label>
<input type="text" name="uName" id=""  class="form-control" value="<?php echo $userName ?>" placeholder="" aria-describedby="helpId">
<small id="helpId" class="text-danger"><?php echo $userNameErr   ?></small>
</div>
<div class="form-group">
<label for="" class="p-2">Email:</label>
<input type="text" name="uEmail" id=""  class="form-control" value="<?php echo $userEmail ?>" placeholder="" aria-describedby="helpId">
<small id="helpId" class="text-danger"><?php echo $userEmailErr   ?></small>
</div>
<div class="form-group">
<label for="" class="p-2">Password:</label>
<input type="text" name="uPassword" id=""  class="form-control" value="<?php echo $userPassword ?>" placeholder="" aria-describedby="helpId">
<small id="helpId" class="text-danger"><?php echo $userPasswordErr   ?></small>
</div>
<div class="form-group">
<label for="" class="p-2">ConfirmPassword:</label>
<input type="text" name="uConfirmpassword" id=""  class="form-control" value="<?php echo $userConfirmpassword ?>" placeholder="" aria-describedby="helpId">
<small id="helpId" class="text-danger"><?php echo $userConfirmpasswordErr   ?></small>
</div>
<button type="submit" class="btn btn-info m-3" name="register">Register</button>
  </form>
</div>
</body>
</html>