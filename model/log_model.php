<?php
function log_in(){
session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	$errflag = false;

	if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid";
	}
	else
	{
	// Define $username and $password

		$username=$_POST['username'];
		$password=md5($_POST['password']);

	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysqli_connect("localhost", "root", "");
	// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		//assword = md5($password);
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);
	// Selecting Database
		$db = mysqli_select_db($connection, "ichat");
	// SQL query to fetch information of registerd users and finds user match.
		
		$qry = "SELECT * from user WHERE username = '$username' AND password = '$password'";
		$query = mysqli_query($connection, $qry);

		if($query) {
		if(mysqli_num_rows($query) > 0) {
				$_SESSION['login_user']=$username; // Initializing Session
				$stime =$_SESSION['loggedin_time'];
				$qtime = "INSERT INTO logged (start_time, username)VALUES(NOW(), '".$_SESSION['login_user']."')";
				$result = mysqli_query($connection, $qtime);
				return true; // Redirecting To Other Page
			} 
			else {
				$errflag = true;
				//echo $password;
				return false;
			}
		//mysqli_close($connection); // Closing Connection
	
		}else {
			die("Query failed");
		}
}
}
}

?>