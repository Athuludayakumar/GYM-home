<?php
include_once "../connect.php";

$query = "";
$_POST['password'] = md5($_POST['password']);
$_POST['joiningDate'] = date("Y-m-d");
foreach($_POST as $key => $value){
    $sep = $key == "fname" ? "" : ",";
    $query.= "$sep $key = '$value'";
}

$sql = "INSERT INTO regform SET".$query;
echo $sql;
if(mysqli_query($dataBase,$sql)){
    header("location: http://localhost/GYM/login&logout/log.php");
} else {
    echo "SOMETHING WENT WRONG";
}