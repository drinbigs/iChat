<?php
include 'session.php';
   // $db = new PDO('mysql:host=127.0.0.1;dbname=ichat','root','');

    //include 'model/session.php';
     // $q = $db->prepare("SELECT start_time FROM logged where username='$user_check'");
    // $q->execute();
    // $stime =$_SESSION['loggedin_time'];
    // $dtime = strtotime($stime);

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

    // $query = $db->prepare("SELECT * FROM messages where sess_time>(SELECT start_time from logged where username = '$login_session')");
    // $query->execute();

    // while($fetch = $query->fetch(PDO::FETCH_ASSOC))
    // {
    //     $name = $fetch['username'];
    //     $message = $fetch['message'];
    //     echo "<li class='cm'><b>".ucwords($name)."</b>:".$message."</li>";
    // }
?>