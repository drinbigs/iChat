<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection, "ichat");
session_start();// Starting Session
// Storing Session
date_default_timezone_set('Asia/Manila');
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$qrys = "SELECT username from user where username = '$user_check'";
$ses_sql=mysqli_query($connection, $qrys);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>