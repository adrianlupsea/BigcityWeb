

<?php 
include("config.php");include("login.php");
?>
<!DOCTYPE html>
<html>
 <head>
<script src="//code.jquery.com/jquery-latest.js"></script>
  <script src="chat.js"></script>
  <link href="chat.css" rel="stylesheet"/>

<meta charset="UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"> </script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../script.js"></script>
        <link rel="stylesheet" href="../style.css">

<title>BigCityApps</title>
 </head>
 <body class="col-lg-6 col-offset-3 centered">
<!--<div class="col-lg-6 col-offset-3 centered">
        <nav class="navbar navbar-default" id="nav">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Navigation</a>
            </div>
                <ol class="nav navbar-nav" id="nav">
                     <li><a href="../index.php">Home</a></li>
                     <li><a href="../proiect.php">Proiecte recente</a></li>
                      <li><a href="../coment.php">Interact</a></li>
                     <li><a href="../team.php">Meet the team</a></li>
                     <li><a href="../chat.php">Live Chat</a></li>
                </ol>
          </div>
        </nav>-->
        <div class="col-lg-6 col-offset-3 centered">
  <div id="content" style="margin-top:10px;height:100%;">
   <center><h1>BCA LIVE CHAT</h1></center>
   
   <div class="chat" >
    <div class="panel panel-default">
    <div class="users">
     <?php
      include("users.php");
     ?>
    </div>
    </div>
    <div class="chatbox">
     <?php
     if(isset($_SESSION['user'])){
      include("chatbox.php");
     }else{
      $display_case=true;
      include("login.php");
     }
     ?>
     
    </div>
   </div>
   </div>
  </div>
  </div>
 </body>
</html>
