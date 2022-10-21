<?php
$dataBase = mysqli_connect("localhost", "root", "", "gyn_db");
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
    <title>month</title>
</head>
<style>
    table,th,td{
        border: 1px solid black;
    }
    h1{
        color: blue;
        text-decoration:underline;

    }
</style>
<body>
<form action=" ">
    <input type="date" name="start_date" placeholder="start_date">
    <input type="date" name="end_date" placeholder="end_date">
        <input type="submit" name="submit" value="search">
           </form>

           
</body>
</html>
<?php
if(isset($_GET['submit'])){
    $start = $_GET['start_date'];
    $end = $_GET['end_date'];
    // echo date("Y-m-d");
  $query = "select * from regform where joiningDate between  '$start' AND '$end'";
  echo '<table>
        <thead>
            <tr>
               <th>Name</th>
            <th>joiningDate</th> 
            <th>street name</th>
            <th>dob</th>
             <th>state</th>
              <th>e mail</th>
            </tr>
            
        </thead><tbody>';
    foreach(mysqli_query($dataBase,$query) as $regform)
    {
        
            $name = $regform['fname']." ".$regform['lname'];
            $joiningDate = $regform['joiningDate'];
            $streetName = $regform['streetName'];
            $dob = $regform['dob'];
            $state = $regform['state'];
            $email = $regform['email'];
            // var_dump($value);
           
        echo '
            <tr>
                <td>'.$name.'</td>
                <td>'.$joiningDate.'</td>
                <td>'.$streetName.'</td>
               <td>'.$dob.'</td>
                      <td>'.$state.'</td>
                      <td>'.$email.'</td>

            </tr>'
        ;
    }
    echo '</tbody>
       </table>';
}
    
?>