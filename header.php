<?php
session_start();
include 'config.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The ultimate social circle experience. Add friends, chat with people all around the world, send pictures ,videos and most importantly connect with your loved ones!">
    <title>Social Cirle</title>
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.min.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
  </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">Social Circle</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item bg-light "><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item bg-light"><a class="nav-link" href="chat.php">Start Chatting</a></li>
            <li class="nav-item bg-light"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item bg-light"><a class="nav-link" href="signup.php">Sign Up</a></li>
            <li class="nav-item bg-light"><a class="nav-link" href="login.php">Login</a></li>
          </ul>
          </div>

          <ul class="navbar-nav" id="logout-box">
            <li class="bg-light"><a class="nav-link" href="#"><?php  if(isset($_SESSION['username'])) echo'Welcome, '.'<b>' .$_SESSION['username'].'</b>'; ?></a></li>
            <li class="nav-item bg-light"  style="cursor:pointer;"><a class="nav-link float-right" href="logout.php">Logout</a></li>
          </ul>
        </div>
    </nav>
