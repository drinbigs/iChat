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
<br/>

<!-- <fieldset style="width:50%"><legend>Log In</legend> -->
  <div class="row ">
    <form class="col s12" method="post" action="index.php?action=login">
      <div class="row">

        <div class="input-field col s3">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" name="username" type="text" class="validate" required/>
          <label for="username">Username</label>
        </div>

        <div class="input-field col s3">
          <i class="material-icons prefix">lock</i>
          <input id="password" name="password" type="password" class="validate" required/>
          <label for="password">Password</label>
        </div>
        
          <button class="btn waves-effect waves-dark lightblue darken-3" type="submit" name="submit" style="margin-top: 10px" align="left">Sign In</button>  
          <div> 
            <a href="#" class="">Forgot Password?</a>
          </div>
    </form>       
  </div>
<br/>
  <br/>  <br/>  <br/>  <br/>
<!-- <fieldset style="width:50%"><legend>Register</legend> -->
  <div class="row s1">

  <form class="col s12" method="post" action="index.php?action=register">
          
          <div class="row s1">
            <div class="input-field col s3">
              <i class="material-icons prefix">perm_identity</i>
              <input id="username" name="username" type="text" class="validate" required/>
              <label for="username">Username</label>
            </div>
          </div>
         
          <div class="row s1">
            <div class="input-field col s3">
              <i class="material-icons prefix">email</i>
              <input id="email" name="email" type="email" class="validate" required/>
              <label for="email">Email</label>
            </div>
          </div>
  
          <div class="row s1">
            <div class="input-field col s3">
              <i class="material-icons prefix">lock_outline</i>
              <input id="password" name="password" type="password" class="validate" required/>
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row s1">
            <div class="input-field col s3">
              <i class="material-icons prefix">verified_user</i>
              <input id="confirmpass" name="conpass" type="password" class="validate" required/>
              <label for="confirmpass">Confirm Password</label>
            </div>
          </div>

          <div class="row s1">
            <button class="btn waves-effect waves-dark lightblue darken-3" type="submit" name="register" style="margin-left: 300px"><i class="material-icons">done</i> SUBMIT
            </button> 
          </div>
        </div>
  </form>
  </div>
</body>
</html>
