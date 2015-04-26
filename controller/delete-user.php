<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller to delete an user account */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/delete-user-model.php';

//Starts session and gets username
$userId=$_SESSION['userId'];

if(deleteUser($userId)){
	header("Location: logout.php");
}else{
	$output_error="Error ocurred trying to delete the account ";
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/error_output.php';
}





?>