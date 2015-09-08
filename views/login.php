<!DOCTYPE html>
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

 <button id="chatnow" class="btn waves-effect waves-light right signin blue darken-3 btn modal-trigger" href="#modal1">Start chatting now!
      <i class="material-icons right">forum</i>
  </button>

<form method="post" action="index.php?action=login">
   

    <div id="modal1" class="modal modal-fixed-footer modal-fixed-header">
        <div class="modal-header">
          <h4 class="mhead" style="text-align: center; font-size: 2.5vw; margin-top:10px;">SIGN IN AS GUEST</h4>
        </div>
        <div class="modal-content">
          <div class="row container"> 
              <div class="input-field">
                <i class="material-icons prefix">perm_identity</i>
                <input id="username" type="text" name="username" class="validate" required />
                <label for="username">codename</label>
                <p style = "color:red; font-size:0.8vw; margin-left:20%;">
                *NOTE: <br/>
                -Must contain at least 5 characters <br/>
                -Must contain uppercase and lowercase letters <br/>
                -May contain numbers <br/>
                - '_' are the only special characters accepted <br/>
              </div>  
          </div>
        </div>
        <div class="modal-footer">
           <button class="btn waves-effect waves-light right signin blue darken-3" type="submit" name="submit">SUBMIT</button>
        </div>
      </div>
</form>

      <script type="text/javascript">
        $(document).ready(function(){
          $('.modal-trigger').leanModal({
            dismissible: false // Modal can be dismissed by clicking outside of the modal
          });
        });
      </script>

</body>
</html>