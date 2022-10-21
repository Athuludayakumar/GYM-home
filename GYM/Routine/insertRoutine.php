<?php 
$dataBase = mysqli_connect("localhost", "root", "", "gyn_db");
if (!$dataBase) {
    die("can't connect " . mysqli_connect_error());
}

$fields = "";
$lastField = "day7";
foreach($_POST as $key => $value){
    $fields.= "$key = '$value'";
    if($key != $lastField) $fields.=",";
    
}

$insert = "INSERT INTO routine SET ".$fields.";";
;
var_dump($insert);
mysqli_query($dataBase,$insert);
header("location: http://localhost/GYM%20home/GYM/Routine/edit.php");