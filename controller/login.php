<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Login controller */
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/login_functions.php';	//include the functions of the login model
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/id_parser.inc.php';
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/validatorHelper.inc.php';
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';
require 'vendor/autoload.php';


$username=sanitizeInput($_POST['username']);
$password=sanitizeInput($_POST['password']);

if(checkUser($username,$password)){
	$errorlogin=false;
	$userId=getUserId($username); 
	$_SESSION['auth']=true;		//put the authentication of the session as valid
	$_SESSION['logname']=$username;		//variable that identificates the user name in the session
	$_SESSION['userId']=$userId;	//variable of the id of the user
	$_SESSION['userImage']=getUserImage($userId);


	$session = new SpotifyWebAPI\Session('730c01f53af44936a0cc51459f0cb0ea', 'e1fc633ca35141bdb6edca04632850e7', 'http://localhost/myPromus/controller/dashboard.php');
	$scopes = array(
	    'playlist-read-private',
	    'playlist-modify-private',
        'playlist-modify-public',
	    'user-read-private'
	);
	$authorizeUrl = $session->getAuthorizeUrl(array(
	    'scope' => $scopes
	));
	header('Location: ' . $authorizeUrl);
	die();
	
	//header("Location: dashboard.php");	//redirect to the dahsboard
}else{
	$errorlogin=true;
	$output_error="No valid username or password";
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/login.php'; //show again the index with the error login,,,,,en pruebas,debe redirigir a index1
}

?>
