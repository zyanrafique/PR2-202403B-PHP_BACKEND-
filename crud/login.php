<?php
<<<<<<< HEAD
include("quary.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Correct Bootstrap CDN Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    
<div class="container p-5">
    <form action="" method="POST">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="uEmail" id="email" class="form-control" value="<?php echo $userEmail ?>" placeholder="Enter your email">
            <small class="text-danger"><?php echo $userEmailErr ?></small>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="uPassword" id="password" class="form-control" value="<?php echo $userPassword ?>" placeholder="Enter your password">
            <small class="text-danger"><?php echo $userPasswordErr ?></small>
        </div>

        <button type="submit" class="btn btn-info mt-3" name="userlogin">Login</button>
    </form>
</div>

</body>
</html>
=======
include("query.php");

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
          body {
              background-color: #f8f9fa;
          }
          .container {
              max-width: 800px;
              margin: 0 auto;
              padding: 40px;
              background-color: white;
              border-radius: 10px;
              box-shadow: 0 0 10px rgba(0,0,0,0.1);
              margin-top: 50px;
          }
          h3 {
              color: #0dcaf0;
              margin-bottom: 30px;
          }
          .form-control {
              border: 1px solid #ced4da;
              padding: 10px;
          }
          .form-control:focus {
              border-color: #0dcaf0;
              box-shadow: 0 0 0 0.2rem rgba(13, 202, 240, 0.25);
          }
          .btn-info {
              background-color: #0dcaf0;
              border: none;
              padding: 10px 30px;
          }
          .btn-info:hover {
              background-color: #0baccc;
          }
          .form-group {
              margin-bottom: 20px;
          }
      </style>
  </head>
  <body>
      <div class="container p-5">
          <h3 class="text-center">Login Form</h3>
          <form action="" method="POST" style="margin-left: 200px;">
          <div class="form-group col-md-8 ">
    <label for="" class="p-2">Email:</label>
    <input type="text" name="uEmail" id=""  class="form-control" value="<?php echo $userEmail ?>" placeholder="" aria-describedby="helpId">
    <small id="helpId" class="text-danger"><?php echo $userEmailErr   ?></small>
  </div>
  <div class="form-group col-md-8">
    <label for="" class="p-2">Password:</label>
    <input type="text" name="uPassword" id=""  class="form-control" value="<?php echo $userPassword ?>" placeholder="" aria-describedby="helpId">
    <small id="helpId" class="text-danger"><?php echo $userPasswordErr   ?></small>
  </div>
    
      <button type="submit" class="btn btn-info m-3" name="login">Login</button>
      </form>
      </div>
      </div>
  </body>
  </html>
>>>>>>> f52810b (Added file in crud folder with updates)
