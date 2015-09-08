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

    <script>
      window.onload = function(){
        document.getElementById("text").focus();
      };            
    </script>

</head>

<body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

<form action="" method="post">
<ul id="dropdown1" class="dropdown-content" style="overflow-x: hidden;">
  <li><a href="index.php?action=logout">Log Out</a></li>
</ul>
</form>

<nav>
    <div class="nav-wrapper blue darken-3">
    <a href="" class="brand-logo left">iChat</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="userbtn"><a class="dropdown-button user-btn" href="#" data-activates="dropdown1">
        <?php echo $login_session; ?><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
      </ul>
    </div> 
</nav>


  <div style="width: 100%;">
    <div class="cont" style="width: 80%; float: left; display: inline-block;">
      <div class="chatName" style="font-size: 30px; color: white;">
        <i class="material-icons ic">public</i>&nbsp;Public
      </div>

      <div class="chatCont">
        <div class="chatMessages">
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

    <div class="fcon" style="width: 19%; float: right; display: inline-block;">
      <div class="ubar">Online Guest/s</div>
       <div class="nlist">
        <?php
          $qry = "SELECT username from logged";
          $query = mysqli_query($connection, $qry);
          if($query) {
          if (mysqli_num_rows($query) > 0) {
            while($row = mysqli_fetch_assoc($query)) {
              echo "<tr><td>".$row["username"]."</td></tr><br/>";
            }
          }
        }
        ?>
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





