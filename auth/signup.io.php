<?php

if(isset($_POST["submit"])){

   $conn = mysqli_connect("localhost", "root", "","login");

   if(!$conn){
     echo "problem";
   }

    if($_SERVER["REQUEST_METHOD"] === "POST" ){

       if(isset($_POST["user"]) && isset($_POST["pass"])){

         function vaildate($data){
           $data = trim($data);
           $data = stripcslashes($data);
           $data = htmlspecialchars($data);
            return $data;
         }
         $user = vaildate($_POST["user"]);
         $pass = vaildate($_POST["pass"]);
         if(empty($user)&&empty($pass)){
            header("Location: ./signup.php?error=empty");

         }else if(empty($user)){
            header("Location: ./signup.php?error=userempty");


         }else if(empty($pass)){
            header("Location: ./signup.php?error=passempty");


         

         }else if(strlen($pass)<6){
            header("Location:./signup.php?error=passlen");




         }else{
             $sql = "SELECT * FROM users WHERE username='$user'";
             $res = mysqli_query($conn,$sql);
             if(mysqli_num_rows($res)== 1){
                header("Location: ./signup.php?error=used");

             }else{
                 $sql = "INSERT into users(username,password) VALUES('$user','$pass')";
                 if(mysqli_query($conn,$sql)){
                    header("Location: ./login.php?add=added");
                 }else{
                    header("Location: ./signup.php?error=servererror");
                 }
             }
         }


       }


    }



}
