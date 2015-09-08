<?php
//main controller

if( isset($_GET['action']) ){
	switch($_GET['action']){

	/****** switch cases ******/
	case "login":
		login();
		break;

	case "chat":
		chat();
		break;

	case "logout":
		logout();
		break;

	default:
		home();
	}
}

else{
	home();
}

/*****************************FUNCTIONS*****************************/

function home(){
	include "views/login.php";

}

function chat(){
	include "views/chat.php";
}

function login(){
	include "model/log_model.php";
	$result = log_in();
	if($result){
		echo "<script type=\"text/javascript\">".
		"alert('Success!');".
        "location.replace('index.php?action=chat');".
        "</script>";
        // header('index.php?action=chat');
		return true;
	}
	else{
		echo "<script type=\"text/javascript\">".
        "alert('Username is currently online!');".
        "location.replace('index.php?action=home');".
        "</script>";
		
	}

}

// function register(){
// 	include "model/user_model.php";
// 	$result = reg();
// 	if($result){
// 		echo "<script type=\"text/javascript\">".
// 		"alert('Successfully registered! You may log in now.');".
// 		"location.replace('index.php?action=home');".
// 		 "</script>";
// 	}

// 	else{
// 		echo "<script type=\"text/javascript\">".
// 		"alert('Registration failed. Try again.');".
// 		"location.replace('index.php?action=home');".
// 		"</script>";
// 	}

	// $results = reg();
	// 	if($results){
	// 		echo "<script type=\"text/javascript\">".
	//         "alert('Successfully registered! You may log in now.');".
	//         "</script>";
	// 	}
	// 	else{
	// 		echo "<script type=\"text/javascript\">".
	//         "alert('Registration failed. Try again.');".
	//         "</script>";
	// 	}
	// login();

function logout(){
	include "model/logout.php";
}
?>