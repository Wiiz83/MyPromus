<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Signup controller */

session_start();
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/signup_functions.php';	//include the functions of the signup model

//Validate and check that the data is correct and not null TODO


//Code to DO.................


//The data should be validated in the client side

//Variables from the form
$username=strip_tags(trim($_POST[username]));
$password=strip_tags(trim($_POST[password]));
$email=strip_tags(trim($_POST[email]));
$country=strip_tags(trim($_POST[country]));
$city=strip_tags(trim($_POST[city]));


if(!checkUsername($username)){
	$errorMessage="This username already exists";
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/signup_form.html.php'; 
}else{
	if(insertUser($username,$password,$email,$country,$city)){
		$_SESSION['auth']=true;
		$_SESSION['logname']=$username;
		$_SESSION['firstLogin']=true;	//this is to show a welcome message for the first login in the dashboard
		header("Location: dashboard.php");
	}else{
		$errorMessage="An error ocurred when trying to insert the user in the database";
		include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/signup_form.html.php';
	}
}



?>