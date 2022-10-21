<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="./login1.css">
  </head>
  <body class="background">
	
    <div class="center">
      <h1> Admin Login</h1>
      <div class = "error">
      <?php if(isset($_GET['error'])){
        echo "<h3>".$_GET['error']."</h3>";
      } ?>
      </div>
      <form action="validate.php" method="post">
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
       
		  
        </div>

      </form>
    </div>

  </body>
</html>