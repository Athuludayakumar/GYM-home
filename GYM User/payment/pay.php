
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
          <a href="../HomePage/index.php">Home<a>
    </li>
 </ul>

</div>
    <form>
       
        <div class="container">

            <div class="regform">
                <h1>Make payment</h1>
            </div>


            <div class="routine-name">
                <label for="fname">E mail: </label>
                <input class="email"  style="color: white;"type="email" id="email" value="<?php echo $email?>" disabled name="email">
            </div>
            <div class="input-field">
                <label for="Name">Name: </label>
                <input type="text"  style="color: white;"id="Name" value="<?php echo $fname." ".$lname ?>" disabled name="Name">
            </div>
          

            <div class="input-field">
                <label for="Amount">monthly Amount: </label>
                <input type="text" style="color: white;" value="<?php echo $payment ?>" id="Amount" disabled name="Amount">
            </div>
          
           
            <div class="input-field">
                <input type="submit" value="ADD PAYMENT">
                <input type="reset" value="RESET">
            </div>


      
           
        </div>
    </form>


</body>
</html>