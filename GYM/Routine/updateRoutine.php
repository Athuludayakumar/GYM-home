<?php 
$dataBase = mysqli_connect("localhost", "root", "", "gyn_db");
if (!$dataBase) {
    die("can't connect " . mysqli_connect_error());
}

$fields = "";
$lastField = "day7";
foreach($_POST as $key => $value){
    if($key != 'name'){
        $fields.= "$key = '$value'";
    if($key != $lastField) $fields.=",";
    }
    
    
}
$name = $_POST['name'];

$insert = "UPDATE routine SET ".$fields." WHERE routineName='$name';";
;
var_dump($insert);
mysqli_query($dataBase,$insert);
header("location: http://localhost/GYM%20home/GYM/Routine/edit.php");