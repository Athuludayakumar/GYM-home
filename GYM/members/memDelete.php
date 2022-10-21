<?php
session_start();
if(isset($_SESSION['adminId'])){
$dataBase = mysqli_connect("localhost", "root", "", "gyn_db");
if (!$dataBase) {
    die("can't connect " . mysqli_connect_error());
}
$id = $_GET['id'];



$delete = "DELETE FROM regform WHERE id = '$id'";
mysqli_query($dataBase,$delete);

}
 header("location: http://localhost/GYM%20home/GYM/members/memTable.php");