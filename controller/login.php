<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Login controller */
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/login_functions.php';	//include the functions of the login model
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/id_parser.inc.php';
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/validatorHelper.inc.php';



$username=sanitizeInput($_POST['username']);
$password=sanitizeInput($_POST['password']);

if(checkUser($username,$password)){
	$errorlogin=false;
	$_SESSION['auth']=true;		//put the authentication of the session as valid
	$_SESSION['logname']=$username;		//variable that identificates the user name in the session
	$_SESSION['userId']=getUserId($username); //variable of the id of the user
	
	
	header("Location: dashboard.php");	//redirect to the dahsboard
}else{
	$errorlogin=true;
	$output_error="No valid username or password";
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/login.php'; //show again the index with the error login,,,,,en pruebas,debe redirigir a index1
}

?>
