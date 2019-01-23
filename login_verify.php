<?php

include 'header.php';

error_reporting(E_ALL);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);


$username_query = "SELECT * FROM users WHERE username ='$username'";
$result = mysqli_query($conn,$username_query);
if(mysqli_num_rows($result) > 0){

  $password_query = "SELECT * FROM users WHERE password ='$password'";
  $result_1 = mysqli_query($conn,$password_query);
  $num_rows = mysqli_fetch_array($result);
  $verify = password_verify($password,$num_rows['password']);
  if($verify){
    $_SESSION['username'] = $username;
     header("refresh:0;url=index.php");
    // exit();

  } else echo '<div class="container"><h1 style="color:red;">Username or password incorrect!</h1></div>';

} else echo '<div class="container"><h1 style="color:red;">Username or password incorrect!</h1></div>';


?>
