<?php
include('model/session.php');
?>

<html>
<head>
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/icon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    
    <title>iChat</title>
</head>

<body>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

<form action="" method="post">
<ul id="dropdown1" class="dropdown-content" style="overflow-x: hidden;">
   <!-- <li><a href=""> <?php echo date('Y m d H:i:s', $_SESSION['loggedin_time']); ?></a></li>
   <li class="divider"></li> -->
  <li><a href="index.php?action=logout">Log Out</a></li>
</ul>
</form>

<nav>
    <div class="nav-wrapper blue darken-3">
    <a href="" class="brand-logo left">iChat</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down"  >
        <li class="userbtn"><a class="dropdown-button user-btn" href="#" data-activates="dropdown1">
        <?php echo $login_session; ?><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
      </ul>
    </div> 
</nav>

<div class="row">
<div class="col s12">

<div class="cont">
<div class="chatName" style="font-size: 30px; color: white;">
    <i class="material-icons ic">public</i>&nbsp;Public
</div>

<div class="chatCont">
  <div class="chatMessages">
    <?php
    include "model/chat_model.php";
    ?>
  </div>

  <div class="chatBottom2">
    <form action="" onclick="" id="chatForm" method="post">
      <input type="hidden" id="name" name="name" value="<?php echo $login_session; ?>"/>
      <input type="text" name="text" id="text" value="" placeholder="Type your message"/>
      <input type="submit" name="submit" value="Send" />
    </form>
  </div>
</div>
</div>


<script type="text/javascript" src="js/chat.js"></script>

<?php

  if(isset($_POST['name']) && isset($_POST['text']))
  {
    if(!empty($_POST['name']) && !empty($_POST['text']))
    {
      include "model/chatPoster.php";
    }
  }

 ?>

</body>
</html>