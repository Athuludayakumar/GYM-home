<?php include_once "../connect.php";?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> registration </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
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
        <form method="post" action="register.php">
            <div class="regifield">


                <div class="input-field">
                    <label for="fname">FIRST NAME: </label>
                    <input class="firstname" type="text" id="fname" name="fname">
                </div>
                <div class="input-field">
                    <label for="lname">LAST NAME: </label>
                    <input class="secondname" type="text" id="lname" name="lname">
                </div>

                <div class="input-field">
                    <label for="STREET NSME">STREET NAME: </label>
                    <input type="text" id="STREET NSME" name="streetName">
                </div>
                <div class="input-field">
                    <label for="ZIP CODE">ZIP CODE: </label>
                    <input type="text" id="ZIP CODE" name="zipcode">
                </div>
                <div class="input-field">
                    <label for="STATE">STATE: </label>
                    <input type="text" id="STATE" name="state">
                </div>
                <div class="input-field">
                    <label for="GENDER">GENDER: </label>
                    <select name="gender" id="gender">

                        <option value="male"> male </option>
                        <option value="female">female </option>
                        <option value="other"> other </option>

                    </select>
                </div>
                <div class="input-field">
                    <label for="DATE">DATE OF BIRTH: </label>
                    <input type="date" name="dob" data-date-inline-picker="true" />
                </div>
                <div class="input-field">
                    <label for="PHONE NUMBER">PHONE NUMBER: </label>
                    <input type="text" id="number" name="number">
                </div>
                <div class="input-field">
                    <label for="email">E MAIL: </label>
                    <input type="email" id="email" name="email">
                </div>
            
              

                <div class="input-field">
                    <label for="lname">PLAN: </label>
                    <input type="text" style="color:cream;" value="monthly" disabled id="Amount" name="Amount">
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <br><br>
                <div class="input-field">
                    <input type="submit" value="REGISTER">
                    <input type="reset" value="RESET">
                </div>

            </div>
        </form>


    </div>
</body>

</html>