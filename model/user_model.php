<?php
function reg(){

$errUser = "";
$errPass = "";
$errEmail = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   $username = trim($_POST["username"]);
	   $email = trim($_POST["email"]);
	   $password = trim($_POST["password"]);
	}

include 'connection.php';

if(isset($_POST['register'])){

// User must be digits and letters
 if(preg_match("/^[0-9a-zA-Z_]{5,}$/", $username) === 0){
 	echo "<script type=\"text/javascript\">".
		"alert('User must be bigger than 5 chars and contain only digits, letters and underscore!');".
		 "</script>";
		 return false;
 }

 // if(preg_match("/^[a-zA-Z]w+(.w+)*@w+(.[0-9a-zA-Z]+)*.[a-zA-Z]{2,4}$/", $email) === 0){
 // 	echo "<script type=\"text/javascript\">".
	// 	"alert('Email must comply with this example mask: someone@example.com!');".
	// 	 "</script>";
	// 	 return false;
 // }

 // Password must be strong
 if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $password) === 0){
 	echo "<script type=\"text/javascript\">".
		"alert('Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit!');".
		 "</script>";
		 return false;
 }
// $errPass .= 'Invalid Password';
// }

else{
$pass = trim(md5($_POST["password"]));
$sql= "INSERT INTO user(username, email, password)VALUES('$username', '$email', '$pass')";
$result = mysqli_query($conn, $sql);
return true;
}
}

else{
	return false;
}
}
?>