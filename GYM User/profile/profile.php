<?php
$dataBase= mysqli_connect("localhost","root","","gyn_db");
if(!$dataBase){
    die("can't connect" . mysqli_connect_error());
}
session_start();
$id = $_SESSION['userId'];
$result = mysqli_query($dataBase,"SELECT * FROM regform WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
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
    <title>Document</title>




    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="./profile.css">
<link rel="stylesheet" href="../../GYM/COMMEN/bootstrap/mdb.min.css">
<script src="../../GYM/COMMEN/jquery.js"></script>
</head>
<body>


   
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="./WhatsApp Image 2022-10-22 at 10.35.23 AM.jpeg" width="130.5" height="85.5" >
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5><br><br>
                                    <?php echo $fname?>
                                    </h5>
                                    <h6> 
                                    <?php echo $email?>
                                    </h6>
                                  <p><br><br></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                       








<!-- pending linking -->


<style>
    .border {
        border: 1px solid green;
    }
</style>


                  <a href="jdkd"  class=" profile-edit-btn border" name="btnAddMore" >Edit Profile</a> 
                
                    </div>
                         
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            
                            
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    <?php echo $fname." ".$lname; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Street Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    <?php echo $streetName; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Joined Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    <?php echo $joiningDate; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    <?php echo $number; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>state</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>

                                                <?php echo $state; ?>
                                                </p>
                                                    
                                            </div>
                                        </div>
                            </div>
                            
                        </div>
     
                    </div>
                </div>
            </form>           



    
</body>
</html>