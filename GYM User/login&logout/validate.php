<?php 
include_once "connect.php";
session_start();
$email = $_POST['email'];
$pass = md5($_POST['password']);

$sql = "SELECT * FROM regform WHERE email = '$email' AND password = '$pass'";
$result = mysqli_query($dataBase,$sql);
if(mysqli_num_rows($result) == 1){
    $user = mysqli_fetch_assoc($result);
    $_SESSION['userId'] = $user['id'];
    $_SESSION['userName'] = $user['fname'];


    header("location: http://localhost/GYM%20home/GYM%20User/userhomepage/userindex.php");
}else {
    header("location: http://localhost/GYM%20home/GYM%20User/login&logout/log.php?error=invalide email or password ");
}

