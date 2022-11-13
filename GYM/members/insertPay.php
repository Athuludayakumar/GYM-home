<?php
session_start();
if (isset($_SESSION['adminId'])) {
    $dataBase = mysqli_connect("localhost", "root", "", "gyn_db") or  die("can't connect" . mysqli_connect_error());
    $regId = $_GET['userId'];
    $payment = mysqli_fetch_assoc(mysqli_query($dataBase,"SELECT * FROM payform "))['payment'];
    
    mysqli_query($dataBase,"INSERT INTO paytable SET userId = '$regId',payment = '$payment'") or die(mysqli_error($dataBase));
} else {
    echo "not loginned";
    // header("location : ");
}

/*
Array { key1 => value
        key2 => value
    }
isset key3 in Array
value = Array[key1]


*