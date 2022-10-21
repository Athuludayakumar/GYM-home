<?php $dataBase = mysqli_connect("localhost", "root", "", "gyn_db");
if (!$dataBase) {
    die("can't connect " . mysqli_connect_error());
}
$name = $_GET['id'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routine</title>
    <link rel="stylesheet" href="routine.css">
</head>
<body>
   
<div class="home-short">
<ul>
    <li>
          <a href="../HomePage/index.php">Home<a>
    </li>
 </ul>

</div>
    <form action="updateRoutine.php" method="POST">
       
        <div class="container">

            <div class="regform">
                <h1>Edit routine</h1>
            </div>

            <?php 
            $row = mysqli_query($dataBase,"SELECT * FROM routine WHERE routineName ='$name'");
           
            foreach($row as $fields){
                 foreach($fields as $key => $field){
                echo '
                <div class="input-field">
                <label for="'.$key.'">'.$key.'</label>
                <input value="'.$field.'" class="'.$key.'" type="text" id="'.$key.'" name="'.$key.'">
            </div>';
                 }
            }
            ?>

            <div class="input-field">
                <input type="submit" value="UPDATE ROUTINE">
                <input type="reset" value="RESET">
            </div>

           
           
        </div>
    </form>


</body>
</html>