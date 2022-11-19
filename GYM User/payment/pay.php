
<?php $dataBase=mysqli_connect("localhost","root","","gyn_db");
  if(!$dataBase)
    {
    die("can't connect" . mysqli_connect_error());
  }
  
session_start();
$id = $_SESSION['userId'];
$result = mysqli_query($dataBase,"SELECT * FROM regform WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
foreach($row as $key => $value){
    $$key = $value;
}
$payment = mysqli_query($dataBase,"SELECT * FROM payform ");
$row = mysqli_fetch_assoc($payment);
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
    <title>payment</title>
    <link rel="stylesheet" href="routine.css">
</head>
<body>
    <div class="routinehead">
    <h2><br></h2>
</div>
<div class="home-short">
<ul>
    <li>
          <a href="../userhomepage/userindex.php">Home<a>
    </li>
 </ul>

</div>
    <form method="POST" action="insertPayment.php">
       
        <div class="container">

            <div class="regform">
                <h1>Make payment</h1>
            </div>


            <div class="routine-name">
                <label for="fname">E mail: </label>
                <input class="email" disabled type="email" id="email" name="email" style="color: white;" value="<?php echo $email?>"  >
            </div>
            <div class="input-field">
                <label for="Name">Name: </label>
                <input type="text" disabled id="Name"  name="Name" style="color: white;"  value="<?php echo $fname." ".$lname ?>"  >
                
            
            </div>
          

            <div class="input-field">
                <label for="Amount">monthly Amount: </label>
                <input type="text" disabled name="Amount" style="color: white;" value="<?php echo $payment ?>" id="Amount"  >
            </div>
          
           
            <div class="input-field ">
                <input  type="submit" value="ADD PAYMENT">
                
            </div>


      
           
        </div>
    </form>


</body>
</html>
<?php


?>