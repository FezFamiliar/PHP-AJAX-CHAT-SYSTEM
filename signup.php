<?php include 'header.php' ?>
<div class="container">
  <form  action="general.php" method="POST" class="sign-up-form">
    <div class="form-group">
      <label>First Name: </label>
      <input type="Name" name="firstname" class="form-control" required>
    </div>
      <br>
    <div class="form-group">
      <label>Last Name: </label>
      <input type="Name" name="lastname" class="form-control" required>
    </div>
      <br>
    <div class="form-group">
      <label>E-mail: </label>
      <input type="email" name="email" class="form-control" required>
    </div>
      <br>
    <div class="form-group">
      <label>Date of birth: </label>
      <input type="date" name="date" class="form-control" required>
    </div>
      <br>
    <div class="form-group">
        <label>Sex: </label>
        <select class="form-control" name="sex" required>
          <option>Male</option>
          <option>Female</option>
        </select>
    </div>
      <br>
    <div class="form-group">
      <label>Username: </label>
      <input type="text" name="username" class="form-control" required>
    </div>
      <br>
    <div class="form-group">
      <label>Password: </label>
      <input type="password"  name="password" class="form-control" required>
    </div>
      <br>
    <div class="form-group">
      <label>Confirm Password: </label>
      <input type="password" name="cpassword" class="form-control" required>
    </div>
      <br>
    <div class="form-group">
      <input type="submit" class="btn btn-primary float-right">
    </div>
      <br>
  </form>
</div>
<?php include 'footer.php'; ?>
