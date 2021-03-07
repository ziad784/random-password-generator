<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
 <link rel="stylesheet" href="auth.css?<?php echo time()?>">
</head>
<body>
<div class="body">
    <div class="container">

          <h1 id="login" class="login">Login</h1>
          <form action = "login.io.php" method = "post" >
              <input type="text" name="user" autocomplete="off" id="user" class="user" placeholder="username">
              <br>
                  <input type="password" name="pass" autocomplete="off" id="pass" class="pass" placeholder="password">
              <br>

                 <input type="submit" id="go" name ="submit" class="btn" value="Login">

                 <a href="signup.php" >Sign Up</a>


              </form>
             
    </div>

  </div>
  <style>
     .red-b{
        position: absolute;
        color: red;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        font-weight: bold;
        bottom: 22%;
        z-index: 80;
        left: 36%;
        font-size: 14px
      }

      .red-s{
        position: absolute;
        color: red;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        font-weight: bold;
        bottom: 22%;
        z-index: 80;
        left: 42%;
        font-size: 14px
      }
      .red-v{
        position: absolute;
        color: red;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        
        font-weight: bold;
        bottom: 22%;
        z-index: 80;
        left: 42%;
        font-size: 14px
      }
   </style>
  
  <?php
  if(isset($_GET["error"])){
      if($_GET["error"] === "emptyinput"){
          echo "<span class='red-b'>can`t leave username and password empty</span>";
      }elseif($_GET["error"] === "emptyuser"){
        echo "<span class='red-s'>can`t leave username empty</span>";

      }elseif($_GET["error"] === "emptypass"){
        echo "<span class='red-s'>can`t leave password empty</span>";
      }elseif($_GET["error"] === "wrong"){
        echo "<span class='red-s'>username or password wrong</span>";

      }
  }
?>

<script src="login.js"></script>
</body>
</html>