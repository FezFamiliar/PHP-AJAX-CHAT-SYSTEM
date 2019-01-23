<?php
error_reporting(E_ALL | E_STRICT);
include 'header.php';



$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$date = mysqli_real_escape_string($conn,$_POST['date']);
$sex = mysqli_real_escape_string($conn,$_POST['sex']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);

$password_DB = password_hash($password,PASSWORD_DEFAULT);
$cpassword_DB = password_hash($cpassword,PASSWORD_DEFAULT);

$_SESSION['username'] = $username;
/* CHECK IF USERNAME ALREADY EXISTS */
$check = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn,$check);

/* CHECK IF EMAIL IS ALREADY TAKEN */
$email_check = "SELECT * FROM users WHERE email = '$email'";
$result_email = mysqli_query($conn,$email_check);

$query = "INSERT INTO users(first_name,	last_name	,email,	birth_date,	sex	,username,	password,	confirm_password
) VALUES ('$firstname','$lastname','$email','$date','$sex','$username','$password_DB','$cpassword_DB ')";



if($password != $cpassword) echo '<div class="container"><h1 style="color:red;">Passwords do not match! Please try again!</h1></div>';
else if(mysqli_num_rows($result) > 0) echo '<div class="container"><h1 style="color:red;">Username taken! Please try again!</h1></div>';
else if(mysqli_num_rows($result_email) > 0) echo '<div class="container"><h1 style="color:red;">Email taken! Please try again!</h1></div>';
else{

  mysqli_query($conn,$query);
  echo '<div class="container" style="margin-top:50px;"><h1>Thank you for signing up! You will be redirected to the home page shortly.</h1></div>';
}
header("refresh:3;url=signup.php");
exit();
?>
