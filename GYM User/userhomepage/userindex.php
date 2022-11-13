<?php 
session_start();

if(isset( $_SESSION['userId'])) { ?>

<!Doctype html>
<html lang="en">
<head>
<meta charset = "UTF-8">
<!-- important to make website reposite-->
<meta name = "viewport" content="width=device-width,initial-scale=0">
<title>GYM MANAGEMENT</title>
<!-- link our css file -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../User COMMEN/style.css">
<link rel="stylesheet" href="slidetxt.css">
</head>
<body>



<!-- name bar selection start here -->
<section class="name-bar">
<div class="container">
        <div class="logo">
 <img src="../../GYM/COMMEN/images/logoor.jpeg" alt="gym logo" class="img-responsive">
                                  
         </div>
             <div class="menu text-right">
          
    <ul>
       <li>
             <a href="#">Home<a>
       </li>
      
       <li>
             <a href="#">payment<a>
       </li>
       <li>
             <a href="#">About us<a>
       </li>
       <li>
             <a href="#">profile<a>
     </li>
  </div>
<div class="clearfix"></div>
                      

</div>
</section>
<!-- name bar selection ends here -->

 <!-- ads selection starts here -->

 <section class="advertisement">

      <div class="container  ad-container">
        <?php if(isset($_GET['notification'])){
          echo ' <div class="alert alert-success">'.$_GET['notification'].'</div>';
          

        } ?>
      

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
          <img src="../../GYM/COMMEN/images/ad1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="../../GYM/COMMEN/images/aaaaaa.jpg "alt="">
        </div>
        <div class="slide">
          <img src="../../GYM/COMMEN/images/bbbbbbbb.jpg" alt="">
        </div>
        <div class="slide">
          <img src="../../GYM/COMMEN/images/cccccc.jpg" alt="">
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


<!-- buttons selection start here -->
<section class="explore">
<div class="container cont"  >

           
                           <div class="menu1">
                             
                             <a href="../Routine/edit.php" class="btn-second">Routine</a>
                               </div>
                          <div class="menu1">
                              <a href="../../GYM/health.html" class="btn-second">Need of Health</a>
                               </div>
                     <div class="menu1">
                         <a href="../../GYM/gallery/gallery.html" class="btn-second">Gallery</a>
                               </div>
                       <div class="menu1">
                         <a href="#" class="btn-second">Store</a>
               
                            </div>
                         

                               <div class="clearfix"> </div>        
</div>
</section>
<!-- button selection ends here -->




<!-- social selection start here -->
<section class="social">
<div class="container text-centre">

                <ul>
                          <li>
                                   <a href="#"> <img src="https://img.icons8.com/color/48/000000/facebook-new.png"/></a>
                           </li>
                               <li>
                                   <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a>
                           </li>
                                <li>
                                   <a href="#"><img src="https://img.icons8.com/color/48/000000/linkedin.png"/></a>
                           </li>
                   </ul>
</div>
</section>
<!-- social selection ends here -->




<!-- footer selection start here -->
<section class="footer">
<div class="container text-centre">

                                                                 <p>All rights are reserved.  <a href="../../GYM/explore/master.html">AboutUs</a></p>
</div>
</section>
<!-- footer selection ends here -->



</body>
</html>
<?php
 } else {
  header("location: http://localhost/GYM%20home/GYM%20User/login&logout/log.php");
} ?>