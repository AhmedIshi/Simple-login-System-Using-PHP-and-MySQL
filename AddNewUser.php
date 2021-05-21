<?php

include "connection.php";
 if (isset($_POST['submit']))
 {

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $fullname = $firstname . " " . $lastname;
  $email = $_POST['email'];
  $username  = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT `username` FROM `users`";
  $result = mysqli_query($con, $sql);
  // $res = mysqli_fetch_assoc($result);

  while($res = mysqli_fetch_assoc($result))
  {
    print_r($res);
  }

  // foreach($res as $indexName => $value)
  // {
  //   echo "$indexName is $value";
  // }
  // if(in_array($username, $res))
  // {
  //   echo "username already exist";
  // }


  $sql = "INSERT INTO `users`(`username`, `email`, `fullname`, `password`) VALUES ('$username', '$email', '$fullname' , '$password')";

  mysqli_query($con, $sql);

   header("location: signIn.php?message=Account created successfully");
 }

 ?>