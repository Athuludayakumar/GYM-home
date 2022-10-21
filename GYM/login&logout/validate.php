<?php 
include_once "connect.php";
session_start();
$email = $_POST['email'];
$pass = md5($_POST['password']);

$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'";
// var_dump($sql);
$result = mysqli_query($dataBase,$sql);
if(mysqli_num_rows($result) == 1){
    $user = mysqli_fetch_assoc($result);
    $_SESSION['adminId'] = $user['id'];
    $_SESSION['adminName'] = $user['name'];

    header("location: http://localhost/GYM home/GYM/HomePage/index.php");
}else {
    header("location: http://localhost/GYM home/GYM/login&logout/log.php?error=invalide email or password ");
}

