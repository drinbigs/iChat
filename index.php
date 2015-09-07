<?php
//main controller
//require_once 'views/header.php';


if( isset($_GET['action']) ){
	switch($_GET['action']){

	/****** switch cases for views in mainpage nav ******/
	case "login":
		login();
		break;

	case "register":
		register();
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

function login(){
	include "model/log_model.php";
	$result = log_in();
	if($result){
		echo "<script type=\"text/javascript\">".
        "location.replace('index.php?action=chat');".
         //replace with student home
        "</script>";
	}
	else{
		echo "<script type=\"text/javascript\">".
        "alert('Invalid username or password!');".
        "location.replace('index.php?action=home');".
        "</script>";
	}

}

function register(){
	include "model/user_model.php";
	$result = reg();
	if($result){
		echo "<script type=\"text/javascript\">".
		"alert('Successfully registered! You may log in now.');".
		"location.replace('index.php?action=home');".
		 "</script>";
	}

	else{
		echo "<script type=\"text/javascript\">".
		"alert('Registration failed. Try again.');".
		"location.replace('index.php?action=home');".
		"</script>";
	}

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
}

function chat(){
	include "views/chat.php";
}

function logout(){
	include "model/logout.php";
}
?>