<?php
$server = "mysql:host=localhost;dbname=login";
$user = "root";
$password = "";
$pdo = new PDO($server , $user , $password);
if($pdo){
    echo "<script>alert('connection ')</script>";
}
?>