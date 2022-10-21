<?php $dataBase = mysqli_connect("localhost", "root", "", "gyn_db");
if (!$dataBase) {
    die("can't connect " . mysqli_connect_error());
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<style>
    table,th,td{
        border: 1px solid black;
    }

    a{
        display: inline-block;
  padding: 15px 25px;
  font-size: 10px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:#3093d1;
  border: none;
  border-radius: 15px;
 
  
}


a:hover {background-color: #0780e3}

a:active {
  background-color: #0780e3;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
th,td{
    text-align: center;
}



</style>
<body>
    <h1>Routines</h1>
    <table style="width:100%">
    <tr>
        <th>Sl No</th>
        <th>Routine Name</th>
        <th>Action</th>

    </tr>

    <?php 
    $counter = 0;

    $routines = mysqli_query($dataBase,"SELECT * FROM routine");
    foreach($routines as $routine)
     { 
        $name = $routine['routineName'];
        $counter++;
        # code... 
        echo '
    <tr 
     >
        <td>'.$counter.'</td>
        <td>'.$name.'</td>
        <td>
        <a href = "viewRoutine.php?id='.$name.'" >view</a>
        <a href = "editRoutine.php?id='.$name.'" >EDIT</a>
        <a href = "deleteRoutine.php?id='.$name.'" >DELETE</a>
        </td>
    </tr>';
    }
   

    ?>

    </table>
</body>
</html>
