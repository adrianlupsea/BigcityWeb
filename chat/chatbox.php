<?php
include("config.php");
if(isset($_SESSION['user'])){
?>
<div class="well"></div>
 <h1>Big City Apps Test Chatroom</h1>
 <a class="btn btn-info" role="button" href=javascript:void(0); onclick=gotoBottom();>Go down</a>
 <div class='msgs'>
  <?php
  include("msgs.php");
  ?>
 </div>
 <div class="form-group">
 <form id="msg_form">
  <input  class="form-control" name="msg" size="30" type="text"/>
  <button class="btn btn-success">Send</button>
  <a class="btn btn-warning" role="button" href="logout.php">Log Out</a>
  <a class="btn btn-info" role="button" href=javascript:void(0); onclick=gotoTop();>Top</a>
  <script>
  
function gotoTop()
{
$('body,html').animate({scrollTop: 0}, 800);
}

function gotoBottom()
{
$('body,html').animate({scrollBottom: 0}, 800);
}

</script>

  </div>
 </form>
 </div>
<?php
}
?>