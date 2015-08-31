<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/icon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/confess.css">
	<title>SignUp</title>
</head>
<body>
<form class="col s12">
<div class="row s1">

      <div class="row s1">
        <div class="input-field col s3">
          <i class="material-icons prefix">perm_identity</i>
          <input id="username" type="text" class="validate">
          <label for=username>Username</label>
        </div>

        <div class="input-field col s3">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>

	  <div class="row">
	    <div class="input-field col s3">
	      <i class="material-icons prefix">lock_outline</i>
	      <input id="password" type="password" class="validate">
	      <label for="password">Password</label>
	    </div>

	    <div class="input-field col s3">
	      <i class="material-icons prefix">verified_user</i>
	      <input id="confirmpass" type="password" class="validate">
	      <label for="confirmpass">Confirm Password</label>
	    </div>
	  </div>
</form>
	  <div class="row">
	   	  <button class="btn waves-effect waves-dark lightblue darken-3" type="submit" name="action" style="margin-left: 300px"><i class="material-icons">done</i> SUBMIT
	      </button>   	
     </div>
  </div>
</body>
</html>