<?php
function log_in(){
session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	$errflag = false;

	if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		if(preg_match("/^[0-9a-zA-Z_]{5,}$/", $username) === 0){
			 echo "<script type=\"text/javascript\">".
	         "alert('Codename must contain atleast 5 characters, digits, letters and underscore!');".
	         "location.replace('index.php?action=home');".
	         "</script>";
			return null;
		}
		else{
				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysqli_connect("localhost", "root", "");
				// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$username = mysqli_real_escape_string($connection, $username);
				// Selecting Database
			$db = mysqli_select_db($connection, "ichat");
		
			$qry = "SELECT * from logged WHERE username = '$username'";
			$query = mysqli_query($connection, $qry);

				if($query) {
					if(mysqli_num_rows($query) > 0) {
						$errflag = true;
						return false;
					}
					else {
						$_SESSION['login_user']=$username; // Initializing Session
						$qtime = "INSERT INTO logged (start_time, username)VALUES(NOW(), '".$_SESSION['login_user']."')";
						$result = mysqli_query($connection, $qtime);
						return true; // Redirecting To Other Page		
					}
			
				}
				
				else {
					die("Query failed");
				}
		return false;
		}
	}
}

?>