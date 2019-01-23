<?php
include 'header.php';

if(isset($_SESSION['username'])): ?>
<div class="wrapper">
    <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form  method="POST" name="chat" autocomplete="off">
          <textarea  name="message" class="form-control" id="message-box" rows="7"></textarea>
          <a class="btn btn-primary" id="send">Send</a>
        </form>
      </div>
      <div class="col-md-6">
        <div class="chat">
          <p class="message-buffer"></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php else: echo '<div class="container"><h1 style="color:red;">You have to sign up first!</h1></div>';endif;?>
<script type="text/javascript">
$(document).ready(function(){
  $('#send').click(function(){
    var msg = $('#message-box').val();
    if(msg != ''){
      $.post('ajax/main_chat.php',{msg:msg},function(data){

        //console.log(data);
        $('p:last-child').html(data);
        $('.chat').append("<p></p>");
      });

    }else{alert('Please type something!');}
  });
});
</script>
