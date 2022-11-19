<?php

$dataBase = mysqli_connect("localhost", "root", "", "gyn_db") or  die("can't connect" . mysqli_connect_error());


if($_SERVER["REQUEST_METHOD"]=="POST"){


    $product1=$_POST['name1'];
    $link1=$_POST['link1'];
    $product2=$_POST['name2'];
    $link1=$_POST['link2'];
      
    $product1=$_POST['name3'];
    $link1=$_POST['link3'];
    $product2=$_POST['name4'];
    $link1=$_POST['link4'];
      
    $product1=$_POST['name5'];
    $link1=$_POST['link5'];
    $product2=$_POST['name6'];
    $link1=$_POST['link6'];
      
    $product1=$_POST['name7'];
    $link1=$_POST['link7'];
    $product2=$_POST['name8'];
    $link1=$_POST['link8'];
      
    $product1=$_POST['name9'];
    $link1=$_POST['link9'];
    $product2=$_POST['name10'];
    $link1=$_POST['link10'];
      

    

    
    $sql= "INSERT INTO `store`(`name1`, `link1`, `name2`, `link2`, `name3`, `link3`, `name4`, `link4`, `name5`, `link5`, `name6`, `link6`, `name7`,
     `link7`, `name8`, `link8`, `name9`, `link9`, `name10`, `link10`) VALUES
      ('$product1','$link1','$product2','$link2','$product3','$link3','$product4','$link4','$product5','$link5','$product6',
    '$link6','$product7','$link7','$product8','$link8','$product9','$link9','$product10','$link10')";
  
    mysqli_query($dataBase,$sql);}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routine</title>
    <link rel="stylesheet" href="./routine.css">
</head>
<style>
    h2{
        color: black;
    
    font-family: Arial, Helvetica, sans-serif;
    text-align:left;
    font-size: 20px;
    font-weight: lighter;
    text-decoration: underline;

    }
    </style>
<body>
    <div class="routinehead">
    <h2>Create Routine</h2>
</div>
<div class="home-short">
<ul>
    <li>
          <a href="../HomePage/index.php">Home<a>
    </li>
 </ul>

</div>
    <form method="post" action="insertRoutine.php">
       
        <div class="container">

            <div class="regform">
                <h1>
                 create routine
                    
                </h1>
            </div>


            
            <div class="input-field">
                <label for="day1">product1 </label>
                <input class="product" type="text" id="product" name="product1">
            </div>

            <div class="input-field">
                <label for="day1">link1 </label>
                <input class="product" type="text" id="product" name="link1">
            </div>

            
            
            <div class="input-field">
                <label for="day1">product2</label>
                <input class="product" type="text" id="product" name="product2">
            </div>

            <div class="input-field">
                <label for="day1">link2 </label>
                <input class="product" type="text" id="product" name="link2">
            </div>

            
            
            
            <div class="input-field">
                <label for="day1">product3 </label>
                <input class="product" type="text" id="product" name="product3">
            </div>

            <div class="input-field">
                <label for="day1">link3 </label>
                <input class="product" type="text" id="product" name="link3">
            </div>

            
            
            
            <div class="input-field">
                <label for="day1">product4 </label>
                <input class="product" type="text" id="product" name="product4">
            </div>

            <div class="input-field">
                <label for="day1">link5 </label>
                <input class="product" type="text" id="product" name="link5">
            </div>

            
            
            
            <div class="input-field">
                <label for="day1">product6 </label>
                <input class="product" type="text" id="product" name="product6">
            </div>

            <div class="input-field">
                <label for="day1">link6 </label>
                <input class="product" type="text" id="product" name="link6">
            </div>

            
            
            
            <div class="input-field">
                <label for="day1">product7 </label>
                <input class="product" type="text" id="product" name="product7">
            </div>

            <div class="input-field">
                <label for="day1">link7 </label>
                <input class="product" type="text" id="product" name="link7">
            </div>

            
            
            
            <div class="input-field">
                <label for="day1">product8 </label>
                <input class="product" type="text" id="product" name="product8">
            </div>

            <div class="input-field">
                <label for="day1">link8 </label>
                <input class="product" type="text" id="product" name="link8">
            </div>

            
            
            
            <div class="input-field">
                <label for="day1">product9 </label>
                <input class="product" type="text" id="product" name="product9">
            </div>

            <div class="input-field">
                <label for="day1">link9 </label>
                <input class="product" type="text" id="product" name="link9">
            </div>

            
            
            
            <div class="input-field">
                <label for="day1">product9</label>
                <input class="product" type="text" id="product" name="product9">
            </div>

            <div class="input-field">
                <label for="day1">link9</label>
                <input class="product" type="text" id="product" name="link9">
            </div>

            
            
            
            <div class="input-field">
                <label for="day1">product10 </label>
                <input class="product" type="text" id="product" name="product10">
            </div>

            <div class="input-field">
                <label for="day1">link10 </label>
                <input class="product" type="text" id="product" name="link10">
            </div>

            
            
           
            
           
           
            <div class="input-field">
                <input type="submit" value="ADD ROUTINE">
                <input type="reset" value="RESET">
            </div>

           
           
        </div>
    </form>


</body>
</html>