<?php
include 'session.php';

if(session_destroy()){

	$que = "DELETE from logged WHERE username = '$login_session'";
	$result = mysqli_query($connection, $que);
	header("Location: index.php"); // Redirecting To Home Page
}
?>