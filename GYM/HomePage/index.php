<?php
  session_start();
  if(!isset($_SESSION['adminId'])){
    header("location: http://localhost/GYM home/GYM/login&logout/log.php");
  } else{ 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin control</title>
  <link rel="stylesheet" href="./style_2.css">
  <link rel="stylesheet" href="../COMMEN/style.css">
  <link rel="stylesheet" href="./slidetxt.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="../COMMEN/jquery.js" charset="utf-8"></script>
</head>


<body>



  <div class="menu-btn">
    <i class="fas fa-bars"></i>
  </div> 
   <div class="side-bar">
      <div class="close-btn">
          <i class="fas fa-times"></i>
      </div>


     <div class="menu">
      <div class="item"><a href="C:\Users\athulunni\Desktop\GYM\HomePage\index.html"><i class="fas fa-desktop"></i>Home</a></div>

      <div class="item"><a href="#"><i class="fas fa-money-check-dollar"></i>Dashboard</a></div>

    

      <div class="item"><a href="../payment/payTable.php"><i class="fas fa-money-check-dollar"></i>Payment</a></div>

     
     <div class="item"><a href="../members/memTable.php"><i class="fas fa-money-check-dollar"></i>Members</a></div>


      

      <div class="item">
        <a class="sub-btn"><i class="fas fa-table"></i>Overview<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="../overview/month.php" class="sub-item">Member overview</a>
         
          <a href="../payment/payTotal.php" class="sub-item">Income overview</a>
        </div>
      </div>
      
      <div class="item">
        <a class="sub-btn"><i class="fas fa-table"></i>Exerise routines<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="../Routine/newroutine.html" class="sub-item">Add routine</a>
          <a href="../Routine/edit.php" class="sub-item">Edit routine</a>
          <a href="../../GYM User/Routine/edit.php" class="sub-item">View routine</a>
        </div>
      </div>
     
      <div class="item"><a href="../profile/profile.php"><i class="fas fa-info-circle"></i>Profile</a></div>

      <div class="item"><a href="#"><i class="fas fa-th"></i>logout</a></div>

      
    </div>
   </div>
  </div> 

  <div class="main">
   

      <!--  ads start here -->
      <section class="advertisement">

        <div class="container  ad-container">
          





             <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="../COMMEN/images/ad1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="../COMMEN/images/aaaaaa.jpg "alt="">
        </div>
        <div class="slide">
          <img src="../COMMEN/images/bbbbbbbb.jpg" alt="">
        </div>
        <div class="slide">
          <img src="../COMMEN/images/cccccc.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>
      



          
          <div class="clearfix"></div>
        </div>
      </section>
             <!-- ads selection ends here -->


           <!-- button selection starts here -->
      <section class="explore text-centre ">
        <div class="container">
        

          <div class="menu1">
            <a href="#" class="btn-second">Store</a>
          </div>
          
          <div class="menu1">
            <a href="../health.html" class="btn-second">Need of health</a>
          </div>
          <div class="menu1">
            <a href="../gallery/gallery.html" class="btn-second">Gallery</a>

          </div>
         
          <div class="menu1">
            <a href="../explore/master.html" class="btn-second">About Us</a>
          </div>

          <div class="clearfix"> </div>
        </div>
      </section>
      <!-- button selection ends here -->

       <!-- footer selection start here -->
       <section class="footer">
        <div class="container text-centre">
             
              <p>All rights are reserved. Designed by <a href="a">athul</a></p>
        </div>
   </section>
    <!-- footer selection ends here -->
     </div>

  <script type="text/javascript">
    $(document).ready(function () {
      //jquery for toggle sub menus
      $('.sub-btn').click(function () {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });

      //jquery for expand and collapse the sidebar
      $('.menu-btn').click(function () {
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function () {
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
    });

  </script>

</body>

</html>
<?php }