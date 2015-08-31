<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/icon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/confess.css">
    <title>Log In</title>
</head>
<body>
  <div class="row">
    <form class="col s12">
      <div class="row">

        <div class="input-field col s3">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>

        <div class="input-field col s3">
          <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        
          <button class="btn waves-effect waves-dark lightblue darken-3" type="submit" style="margin-top: 10px">Sign In</button>  
          <div> 
            <a href="#" class="">Forgot Password?</a>
          </div>
    </form>       
  </div>
</body>
</html>
