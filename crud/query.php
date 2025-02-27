<?php
include("dbconnection.php")
?>

<?php
///register form
$userName = $userEmail = $userPassword  = $userConfirmpassword = "";
$userNameErr = $userEmailErr = $userPasswordErr  = $userConfirmpasswordErr = "";

if(isset($_POST['register'])){
    $userName = $_POST['uName'];
    $userEmail = $_POST['uEmail'];
    $userPassword = $_POST['uPassword'];
    $userConfirmpassword = $_POST['uConfirmpassword'];
    
    if(empty($userName)){
        $userNameErr = "NAme is requird";
    }
    if(empty($userEmail)){
        $userEmailErr = "Email is required";

    }
    if(empty($userPassword)){
        $userPasswordErr = "Password is requird";
    }
    if(empty($userEmail)){
        $userConfirmpasswordErr = "confirm password  is required";

    }
     
    else{
        if($userConfirmpassword != $userPassword){
            $userConfirmpasswordErr = "Password does not match";
        }
    }
if(empty($userNameErr) && empty($userEmailErr) && empty($userPasswordErr) && empty($userConfirmpasswordErr)) {
    $checkQuery = $pdo->prepare("SELECT * FROM users WHERE email = :uEmail");
    $checkQuery->bindParam(':uEmail', $userEmail);
    $checkQuery->execute();
    
    if($checkQuery->rowCount() > 0) {
      $userEmailErr = "Email already exists";
    } else {
        $query = $pdo->prepare("INSERT INTO users(name, email, password) VALUES (:uName, :uEmail, :uPassword)");
        $query->bindParam(':uName', $userName);
        $query->bindParam(':uEmail', $userEmail);
        $query->bindParam(':uPassword', $userPassword);
        $query->execute();
        
        echo "<script>alert('User registered successfully!'); location.assign('login.php');</script>";
    }
}

    
}


//login form
  if(isset($_POST['userlogin'])){
      $userEmail = $_POST['uEmail'];
      $userPassword = $_POST['uPassword'];
    
      if(empty($userEmail)){
          $userEmailErr = "Email is required";
      }
      else{
          $query = $pdo->prepare("SELECT * FROM users WHERE email = :uEmail");
          $query->bindParam(':uEmail', $userEmail);
          $query->execute();
          $user = $query->fetch(PDO::FETCH_ASSOC);//fetch all data in associative array
          if($user){  //if user is found
              if($user['password'] == $userPassword ){   //if password is correct
                  if($user['role_id'] == 1){           //if user is admin
                      $_SESSION['user_id'] = $user['id'];
                      $_SESSION['user_name'] = $user['name'];
                      $_SESSION['user_email'] = $user['email'];
                      $_SESSION['user_role'] = $user['role_id'];
                      echo '<script>location.assign("login.php?success=adminlogin")</script>';
                  }
                  else if($user['role_id'] == 2){       //if user is user
                      $_SESSION['user_id'] = $user['id'];
                      $_SESSION['user_name'] = $user['name'];
                      $_SESSION['user_email'] = $user['email'];
                      $_SESSION['user_role'] = $user['role_id'];
                      echo '<script>location.assign("login.php?success=userlogin")</script>';
                  }
                  echo '<script>location.assign("login.php?success=login")</script>';
              }
              else{
                  $userPasswordErr = 'password not matched';  //if password is not correct
              }
          }
          else{
              $userEmailErr = 'user not found';     //if user is not found
          }
        
          if(empty($userPassword)){
              $userPasswordErr = 'password is required';  //if password is empty
          }
      }
  }
  ?>
