<?php

$dataBase = mysqli_connect("localhost", "root", "", "gyn_db") or  die("can't connect " . mysqli_connect_error());

session_start();
$id = $_SESSION['userId'];


$result = mysqli_query($dataBase,"SELECT * FROM regform WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
foreach($row as $key => $value){
    $$key = $value;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel='stylesheet' type='text/css' media='screen' href='./reg.css'>
 <script src='main.js'></script>
</head>

<body class="background">

    <div class="regform">
        <h1>FLEX </h1>
    </div>

    <div class="center regi_background">
        <div class="regform">
            <h1> Registration form</h1>
        </div>

      

        <form method="POST" action="">
            <div class="regifield">


                <div class="input-field">
                    <label for="fname">FIRST NAME: </label>
                    <input class="firstname" type="text" id="fname" name="fname" value=" <?php echo $fname?> ">
                </div>
                <div class="input-field">
                    <label for="lname">LAST NAME: </label>
                    <input class="secondname" type="text" id="lname" name="lname" value=" <?php echo $lname?> ">
                </div>

                <div class="input-field">
                    <label for="STREET NSME">STREET NAME: </label>
                    <input type="text" id="STREET NSME" name="streetName" value=" <?php echo $streetName?>">
                </div>
                <div class="input-field">
                    <label for="ZIP CODE">ZIP CODE: </label>
                    <input type="text" id="ZIP CODE" name="zipcode" value=" <?php echo $zipcode?>">
                </div>
                <div class="input-field">
                    <label for="STATE">STATE: </label>
                    <input type="text" id="STATE" name="state" value=" <?php echo $state?>">
                </div>
                <div class="input-field">
                    <label for="GENDER">GENDER: </label>
                    <select name="gender" id="gender" value=" <?php echo $gender?>">

                        <option value="male"> male </option>
                        <option value="female">female </option>
                        <option value="other"> other </option>

                    </select>
                </div>
                
                <div class="input-field">
                    <label for="PHONE NUMBER">PHONE NUMBER: </label>
                    <input type="text" id="number" name="number" value=" <?php echo $number?>">
                </div>
                <div class="input-field">
                    <label for="email">E MAIL: </label>
                    <input type="email" id="email" name="email" value=" <?php echo $email?>">
                </div>
            
              

                <div class="input-field">
                    <label for="lname">PLAN: </label>
                    <input type="text" style="color:cream;" value="monthly" disabled >
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value=" <?php echo $password?>">
                </div>
                <br><br>
                <div class="input-field">
                    <input type="submit" value="UPDATE">
                    <input type="reset" value="RESET">
                </div>

            </div>
        </form>


    </div>

    
</body>

</html>

<?php


if($_SERVER["REQUEST_METHOD"] == "POST" ){

    $fname = $_POST[ 'fname' ];
    $lname = $_POST[ 'lname' ];
    
    $streetName= $_POST[ 'streetName' ];
    $zipcode = $_POST[ 'zipcode' ];
    
    $state = $_POST[ 'state' ];
    $gender = $_POST[ 'gender' ];
    
  
    $number = $_POST[ 'number' ];
    $email = $_POST[ 'email' ];
 
    $password = $_POST[ 'password' ];
    
   $insert=" UPDATE `regform` SET `fname`='$fname',`lname`='$lname',`streetName`='$streetName',
   `zipcode`='$zipcode',`state`='$state',`gender`='$gender',`number`='$number',
   `email`='$email',`password`='$password'WHERE  id='$id'";


    mysqli_query($dataBase,$insert) or die( mysqli_error($dataBase));}
   
?>