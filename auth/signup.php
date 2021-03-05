<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="body">
    <div class="container">

          <h1 id="login" class="login">signup</h1>
          <form action = "signup.io.php" method = "post" >
              <input type="text" name="user" autocomplete="off" id="user" class="user" placeholder="username">
              <br>
                  <input type="text" name="pass" autocomplete="off" id="pass" class="pass" placeholder="password">
              <br>

                 <input type="submit" id="go" name ="submit" class="btn" value="Login">

                 <a href="login.php" >Login</a>


              </form>

    </div>

  </div>
  <?php
          if(isset($_GET["error"])){
              if($_GET["error"] === "empty"){
                echo "<span class = 'red-b'>can`t leave username and password empty<span/>";
              }else if($_GET["error"] === "userempty"){
                echo "<span class = 'red-s'>can`t leave username empty<span/>";

              }else if($_GET["error"] === "passempty"){
                echo "<span class = 'red-s'>can`t leave password empty<span/>";

              }else if($_GET["error"] === "used"){
                echo "<span class = 'red-v'>username is been used<span/>";

              }else if($_GET["error"] === "servererror"){
                echo "<span class = 'red-s'>something went wrong try again later<span/>";

              }
          }elseif(isset($_GET["add"])){
              if($_GET["add"] === "added"){
                  header("Location:index.php");
              }
          }
        ?>
<script src="login.js"></script>
</body>
</html>