
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password Generator</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/36158853ca.js" crossorigin="anonymous"></script>

  </head>
  <body>
   <div class="body">

     <!--header -->
     <ul class="header">
      
      <img src="logo.png" alt="logo">
        <?php 
           session_start();
           if(isset($_SESSION["login"])){ ?>
               <a href="auth/logout.php" class="login">
                  <li class="header-menu"><span>Logout</span><i class="fas fa-sign-out-alt"></i></li>
                   </a>

           <?php }else{?>
           
       
       <a href="auth/login.php" class="login">
      <li class="header-menu"><span>Login</span><i class="fas fa-user-circle"></i></li>
    </a>
    <?php }?>
     </ul>
     <!--header -->

     <div class="contant">
       <div class="title">
         Free Secure Password Generator
       </div>
       <div class="title2">
        use our online tool to save your time and rest your brain
      </div>
      <form class="form">
        <input type="text" class="input" id="input">
        <abbr title="Copy"><i class="far fa-clone" id="copy" ></i></abbr>
      <abbr title="Generate"> <i class="fas fa-redo-alt" id="repeat"></i></abbr>
       
      </form>
      <div class="custom">
        <div class="custom-txt">Customize your password</div>
        <div class="lenght">Password Length</div>
        <input type="number" class="num" value="10" id="num">
        <div class="ran">
          
          <input type="range" id="slider" min="1" max="50" value="10" class="slider">
        

        </div>
        

      </div>




     </div>

    
   </div>

   
    <script src="js.js"></script>
               
    
    
  </body>
</html>