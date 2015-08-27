<?php
$user = $_GET['user'];
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
  <li><a href=""> <?php echo ucwords($user) ?></a></li>
  <li class="divider"></li>
  <li><a href="">Account</a></li>
  <li><a href="">Log Out</a></li>
</ul>
</form>

<nav>
    <div class="nav-wrapper blue darken-3">
    <a href="" class="brand-logo left">iChat</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down"  >
        <li class="userbtn"><a class="dropdown-button user-btn" href="#" data-activates="dropdown1">
        <?php echo ucwords($user) ?><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
      </ul>
    </div> 
</nav>

<div class="row">
<div class="col s9">

<div class="cont">
<div class="chatName" style="font-size: 30px; color: white;">
    <i class="material-icons ic">public</i>&nbsp;Public
</div>

<div class="chatCont">
  <div class="chatMessages">
  <?php

  $db = new PDO('mysql:host=127.0.0.1;dbname=chat','root','');

  $query = $db->prepare("SELECT * FROM messages");
  $query->execute();

  while($fetch = $query->fetch(PDO::FETCH_ASSOC))
  {
    $name = $fetch['name'];
    $message = $fetch['messages'];

    echo "<li class='cm'><b>".ucwords($name)."</b>:".$message."</li>";
  }
  ?>
  </div>

  <div class="chatBottom2">
    <form action="" onclick="" id="chatForm" method="post">
      <input type="hidden" id="name" name="name" value="<?php echo ucwords($user) ?>"/>
      <input type="text" name="text" id="text" value="" placeholder="Type your chat message"/>
      <input type="submit" name="submit" value="Send"/>
    </form>
  </div>
</div>
</div>
<!--2nd chat box-->
<div class="cont">
<div class="chatName" style="font-size: 30px; color: white;">
   Chat with:
</div>

<div class="chatCont">
  <div class="chatMessages">

  
  </div>
  <div class="chatBottom2">
    <form action="" onclick="" id="chatForm" method="post">
      <input type="hidden" id="name" name="name" value="<?php echo ucwords($user) ?>"/>
      <input type="text" name="text" id="text" value="" placeholder="Type your chat message"/>
      <input type="submit" name="submit" value="Send"/>
    </form>
  </div>
</div>
</div>
</div>

<div class="col s3">
  <div class="fcon">
    <div class="ubar">Friend List</div>
    <div class="nlist">
        <ul>
          <div class="divider"></div>
          <li>@theguyinyellow</li><div class="divider"></div>
          <li>@pepengpinakamalupet</li><div class="divider"></div>
          <li>@kesongputi</li><div class="divider"></div>
          <li>@oochinito</li><div class="divider"></div>
          <li>@sofab</li><div class="divider"></div>
          <li>@crownaaaa</li><div class="divider"></div>
          <li>@rushty17</li><div class="divider"></div>
          <li>@kimberlycc_</li><div class="divider"></div>
          <li>@nhomarramos</li><div class="divider"></div>
          <li>@enzo0302</li><div class="divider"></div>
          <li>@jamieraaa</li><div class="divider"></div>
          <li>@daedykun</li><div class="divider"></div>
          <li>@claudz</li><div class="divider"></div>
          <li>@jhearmacaranas</li><div class="divider"></div>
          <li>@julievicente</li><div class="divider"></div>
          <li>@ayieshaerni</li><div class="divider"></div>
        </ul>
    </div>
  </div>
</div>
</div>

<script type="text/javascript" src="js/chat.js"></script>

<?php

  if(isset($_POST['name']) && isset($_POST['text']))
  {
    if(!empty($_POST['name']) && !empty($_POST['text']))
    {
      include "chatPoster.php";
    }
  }

 ?>

</body>
</html>