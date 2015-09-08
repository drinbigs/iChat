<?php
include 'session.php';

$qry = "SELECT username from logged";
		$query = mysqli_query($connection, $qry);
	
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "username: " .$row["username"].;
    }
}
?>