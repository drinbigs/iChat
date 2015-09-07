<?php
global $conn;

$conn = mysqli_connect("localhost","root","","ichat");

	//check the connection
if( mysqli_connect_errno($conn) ){
	echo mysqli_connect_error();
}
?>
?>