<?php
include 'session.php';
if(session_destroy()) // Destroying All Sessions
{
	include 'connection.php';
	$que = "DELETE from logged WHERE username = '$login_session'";
	$result = mysqli_query($conn, $que);
	header("Location: index.php"); // Redirecting To Home Page
}
?>