<?php
include("dbcon.php")
?>

<?php

$userName = $userEmail = $userPassword  = $userConfirmpassword = "";
$userNameErr = $userEmailErr = $userPasswordErr  = $userConfirmpasswordErr = "";
//register.php work start
if(isset($_POST['adduser'])){
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
        $userPasswordErr = " Password is requird";
    }
    if(empty($userConfirmpassword)){
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
//register.php work end


//Logi.php work start
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
    $user= $query->fetch(PDO::FETCH_ASSOC);
    if($user){  
        if($user['password'] == $userPassword ){  
            if($user['role_id'] == 1){
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_role'] = $user['role_id'];
                echo '<script>location.assign("login.php?success=adminlogin")</script>';
            }
            else if($user['role_id'] == 2){
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_role'] = $user['role_id'];
                echo '<script>location.assign("login.php?success=userlogin")</script>';
            }
            echo '<script>location.assign("login.php?success=login")</script>';  
        }  
        else{  
            // echo "<script>location.assign('login.php?error=password not matched')</script>";  
            $userPasswordErr = 'password not matched';  
        }  
    }  
    else{  
        // echo "<script>location.assign('login.php?error=not found')</script>";  
        $userEmailErr = 'user not found';  
    }  
    
    if(empty($userPassword)){  
        $userPasswordErr = 'password is required';  
    }  
    

    }
   }

?>