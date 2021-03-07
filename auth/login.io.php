<?php

session_start();



if(isset($_POST["submit"])){

    $conn = mysqli_connect("host name","user","password","database name");

    if(!$conn){
      echo "problem";
    }

    if(isset($_POST["user"]) && isset($_POST["pass"])){
     function validate($data){
         $data = trim($data);
         $data = stripcslashes($data);
         $data = htmlspecialchars($data);
         return $data;
     }

      $user = validate($_POST["user"]);
      $pass = validate($_POST["pass"]);
      $wrong = "username or password are wrong";
       if(empty($user) && empty($pass)){
           header("Location: ./login.php?error=emptyinput");
       }else if(empty($user)){
        header("Location: ./login.php?error=emptyuser");
      }else if(empty($pass)){
        header("Location: ./login.php?error=emptypass");

      }else{


    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $res = mysqli_query($conn, $sql);
      print_r(mysqli_num_rows($res));
    if(mysqli_num_rows($res)== 1){

        $row = mysqli_fetch_assoc($res);

        if($user == $row["username"] && $pass == $row["password"]){
      
         $_SESSION["login"] = true;
         $_SESSION["user"] = $_POST["user"];
         $_SESSION["id"] = $row["id"];
            header("Location: ../index.php");
        }else if($user != $row["username"]){

        }else if($pass != $row["password"]){
            header("Location: ./login.php?error=passwrong");

        }
    }else{
      
      
        header("Location: ./login.php?error=wrong");
        
    }
  }
}
}else{
    header("Location:login.php");
}
