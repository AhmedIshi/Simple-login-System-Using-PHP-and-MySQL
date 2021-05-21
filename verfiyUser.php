<?php session_start();

include "connection.php";

if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `users` WHERE `username` = '$username' ";

  $result = mysqli_query($con, $sql);
  $res = mysqli_fetch_assoc($result);

  if($res['username'] == $username && $res['password'] == $password)
  {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['fullname'] = $res['fullname'];
    $_SESSION['email'] = $res['email'];
    $_SESSION['failedAttempts'] = $res['failedAttempts'];
    header("location: pages/index.php");
  }
  else
  {
    header("location: signin.php?message=incorrect username and password");
    
  }
  // else if($res['password'] != $password)
  // {
  //   echo "failed Attempt";
  //   $attempt = $res['failedAttempts'] + 1;
  //   $sql = "UPDATE `users` SET `failedAttempts` = $attempt WHERE username = '$username'";
  //   mysqli_query($con, $sql);
  //   $_SESSION['failedAttempts'] = $attempt;
  //   header("location: signIn.php?message=$attempt");
  // }
}
?>