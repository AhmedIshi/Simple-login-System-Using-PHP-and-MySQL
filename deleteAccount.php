<?php session_start();
  include "connection.php";
    
  $user = $_SESSION['username'];
  $password = $_SESSION['password'];


  $sql = "DELETE FROM `users` WHERE `users`.`username` = '$user'";
  $result = mysqli_query($con, $sql);
  
  $temp = "Account Deleted Successfully";
  header("location: signIn.php?message=$temp");

  ?>