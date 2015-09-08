<?php
include 'session.php';


    $qry = "SELECT * FROM messages where sess_time>(SELECT start_time from logged where username = '$login_session')";
	$query = mysqli_query($connection, $qry);
	
	if($query) {
		echo "--> " .$login_session. " is now online";
	if (mysqli_num_rows($query) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query)) {
        $name = $row["username"];
        $message = $row["message"];
        echo "<li class='cm'><b><font color='#ff8080'>".ucwords($name)."</font></b>: ".$message."</li>";
    }

}
}
?>