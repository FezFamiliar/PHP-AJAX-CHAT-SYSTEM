<?php
header("refresh:3;url=index.php");
include 'header.php';


  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];


$query = "INSERT INTO contact (email , subject , message) VALUES ('$email','$subject','$msg')";
if(mysqli_query($conn,$query)) echo '<div class="container" style="margin-top:50px;"><h1>Thank you for contacting us you will be redirected shortly!</h1></div>';

?>
