<?php include 'header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h2 class="text-aside">Have a question? Or just simply want to send us a message? All you need to do is complete the form!</h2>
    </div>
    <div class="col-md-6">
      <form action="contact_action.php" method="POST" class="text-aside">
        <div class="form-group">
          <label>E-mail:</label>
          <input type="email" name='email' class="form-control" required>
          <br>
          <label>Subject: </label>
          <input type="text" name='subject'class="form-control" required>
          <br>
          <label>Message:</label>
          <textarea class="form-control" name='msg' required></textarea>
          <br>
          <input type="submit" class="btn btn-primary float-right" value="Send">
        </div>
      </form>
    </div>
  </div>
</div>
<div class="helper"></div>
<?php include 'footer.php'; ?>
