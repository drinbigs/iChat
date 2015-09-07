<?php
		$db = new PDO('mysql:host=127.0.0.1;dbname=ichat','root','');
		if(isset($_POST['text']) && isset($_POST['name']))
		{
			// session_regenerate_id();
			// $_SESSION['SESS_MEMBER_ID'] = $member['sess_id'];
			
			$text = strip_tags(stripslashes($_POST['text']));
			$name = strip_tags(stripslashes($_POST['name']));
			if(!empty($text) && !empty($name))
			{
				$insert = $db->prepare("INSERT INTO `messages`(`sess_time`, `username`, `message`) VALUES (NOW(),'".$name."','".$text."')");
				$insert->execute();

				/*echo "<li class='cm'><b>".ucwords($name)."</b>:".$message."</li>";*/
			}
		}


?>