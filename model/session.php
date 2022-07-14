 <?php 
 session_start();
       if (isset( $_SESSION["userid"]) &&  $_SESSION["user"]){
           echo "Xin Chào ";
       
       } else{
           header("location: http://localhost:8080/quanlynhahang/login.php");
       }

 
       ?>