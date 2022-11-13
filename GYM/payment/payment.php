
<?php
$dataBase = mysqli_connect("localhost", "root", "", "gyn_db");
if (!$dataBase) {
    die("can't connect " . mysqli_connect_error());
}
$amount=$_POST['Amount'];
$sql = "UPDATE payform set payment='$amount'";

mysqli_query($dataBase,$sql);
header("Location: http://localhost/GYM%20home/GYM%20User/userhomepage/userindex.php?notification=successfully paid");

?>

