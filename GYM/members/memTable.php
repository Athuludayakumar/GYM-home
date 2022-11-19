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
    <link rel="stylesheet" href="../COMMEN/routine.css">
</head>
<style>
  
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
<body>   
<div class="home-short">
<ul>
    <li>
          <a href="../HomePage/index.php">Home</a>
    </li>
 </ul>

</div>
    <h1>OUR MEMBERS</h1><br>
  
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
         <th>payment</th>
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
      <td>  <a href = "insertPay.php?userId='.$id.'" >Pay</a>  </td>
    </tr>';
    }
   

    ?>



    </table>
</body>
</html>