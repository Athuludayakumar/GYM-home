<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../COMMEN/routine.css">
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
</head>

<body>
    
    <div class="home-short">
<ul>
    <li>
          <a href="../HomePage/index.php">Home</a>
    </li>
 </ul>

</div> 
 <h1>Total Income </h1><br>
    <table>
        <tr>
            <th>No</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Payment</th>
            <th>Date</th>
        </tr>

        <?php
        $counter = 0;
        $total = 0;
        $dataBase = mysqli_connect("localhost", "root", "", "gyn_db") or  die("can't connect" . mysqli_connect_error());
        $allPayments = mysqli_query($dataBase, "SELECT email,fname,lname,payment,date FROM regform JOIN paytable on regform.id = paytable.userId order by fname");
        foreach ($allPayments as $payment) {
            $counter++;
            // var_dump($payment);
            $date = date("Y-m-d (h:i A)", strtotime($payment['date']));
            $payment['date'] = $date;
            foreach ($payment as $key => $val) {
                $$key = $val;
            }
            $total += $payment;
            echo "<tr>
            <td>$counter</td>
            <td>$fname $lname</td>
            <td>$email</td>
            <td>$payment</td>
            <td>$date</td>
        </tr>";
        }
        echo "<tr>
        <td colspan=3>Total Income</td>
        <td colspan = 3> $total </td>
        </tr>";
        ?>
    </table>

</body>

</html>