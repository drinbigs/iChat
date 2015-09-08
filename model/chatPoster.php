<?php

		include 'connection.php';
		if(isset($_POST['text']) && isset($_POST['name']))
		{
			
			$text = strip_tags(stripslashes($_POST['text']));
			$name = strip_tags(stripslashes($_POST['name']));
			if(!empty($text) && !empty($name))
			{
				$insert = "INSERT INTO `messages`(`sess_time`, `username`, `message`) VALUES (NOW(),'".$name."','".$text."')";
				$query = mysqli_query($conn, $insert);
				return true;

				/*echo "<li class='cm'><b>".ucwords($name)."</b>:".$message."</li>";*/
			}
		}


?>