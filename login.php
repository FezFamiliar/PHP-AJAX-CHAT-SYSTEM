<?php
include 'header.php';

if(!isset($_SESSION['username'])): ?>
<div class="login">
  <h1>Please enter your information!</h1>
  <div class="box">
    <form class="form-group" action="login_verify.php" method="POST">
      <br>
      <label>Username: </label>
      <input type="Username" name="username" class="form-control">
      <br>
      <label>Password: </label>
      <input type="password" name="password" class="form-control"><br>
      <input type="submit"  class="btn btn-primary float-right" value="Login">
    </form>
  </div>
</div>
<div class="helper"></div>
<?php else: echo '<p style="text-align:center;color:red;font-size:22px;">You are already logged in!</p>';
 endif;include 'footer.php';?>
