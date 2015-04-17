<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Login controller */
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/login_functions.php';	//include the functions of the login model


$username=$_POST[username];
$password=$_POST[password];

if(checkUser($username,$password)){
	$errorlogin=false;
	$_SESSION['auth']=true;		//put the authentication of the session as valid
	$_SESSION['logname']=$username;		//variable that identificates the user in the session
	header("Location: dashboard.php");	//redirect to the dahsboard
}else{
	$errorlogin=true;
	include 'index.html.php' //show again the index with the error login
	exit();
}

?>