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
    <title>members</title>
</head>
<style>
    table,th,td{
        border: 1px solid black;
    }
    h1{
        color: black;
    
    font-family: Arial, Helvetica, sans-serif;
    text-align:left;
    font-size: 20px;
    font-weight: lighter;
    text-decoration: underline;

    

    }
</style>
<body>
    <h1>OUR MEMBERS</h1>
    <table style="width:100%">
    <tr>
        <th>Sl No</th>
        <th>Name</th>
       
        <th>street name</th>
        <th>zipcode</th>
        <th>gender</th>
        <th>dob</th>
        <th>state</th>
        <th>e mail</th>
        <th>ph_number</th>
        <th>joining date</th>
        <th>Action</th>

    </tr>

    <?php 
    $counter = 0;

    $members = mysqli_query($dataBase,"SELECT * FROM regform");
    foreach($members as $regform)
     { 
        $name = $regform['fname']." ".$regform['lname'];
       
        $streetName = $regform['streetName'];
        $zipcode = $regform['zipcode'];
        $gender = $regform['gender'];
        $dob = $regform['dob'];
        $state = $regform['state'];
        $email = $regform['email'];
        $number = $regform['number'];
        $joiningDate = $regform['joiningDate'];
        $id = $regform['id'];
        $counter++;
        # code... 
        echo '
    <tr>
        <td>'.$counter.'</td>
        <td>'.$name.'</td>
        
        <td>'.$streetName.'</td>
        <td>'.$zipcode.'</td>
        <td>'.$gender.'</td>
        <td>'.$dob.'</td>
        <td>'.$state.'</td>
        <td>'.$email.'</td>
        <td>'.$number.'</td>
        <td>'.$joiningDate.'</td>
      <td>  <a href = "memDelete.php?id='.$id.'" >DELETE</a>  </td>
    </tr>';
    }
   

    ?>



    </table>
</body>
</html>