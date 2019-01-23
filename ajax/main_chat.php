<?php
  session_start();
  $relconfig = '../';
  include $relconfig. 'config.php';
  $msg = mysqli_real_escape_string($conn,$_POST['msg']);

  $result = mysqli_query($conn,"SELECT id FROM `users` WHERE username = '".$_SESSION['username']."'");
  $row = mysqli_fetch_array($result);
   $user_id =  $row['id'];

    if(isset($msg)) {
    $query = "INSERT INTO messages(user_id,message,added) VALUES ('$user_id','$msg',NOW())";
    mysqli_query($conn,$query);

  }

    $result = "SELECT message FROM `messages` WHERE user_id = '".$user_id."' ORDER BY msg_id DESC LIMIT 1";
    $fetch = mysqli_query($conn,$result);
    while($data = mysqli_fetch_array($fetch)){

      echo '(' .date("h:i:sa") . ') <b>' . $_SESSION['username'] . ':</b> ' . $data['message'] . '<br>';

    }


?>
