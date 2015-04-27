<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Model functions to set the user information*/

require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/user.class.php';
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';



function setPassword($userId,$newPassword){
	global $link;
	$sql="UPDATE user SET password='$newPassword' WHERE id='$userId'";
	mysqli_query($link,$sql) or die(mysqli_error($link));

}

function setEmail($userId,$newEmail){
	global $link;
	$sql="UPDATE user SET email='$newEmail' WHERE id='$userId'";
	mysqli_query($link,$sql) or die(mysqli_error($link));

}

function setCountry($userId,$newCountry){
	global $link;
	$sql="UPDATE user SET country='$newCountry' WHERE id='$userId'";
	mysqli_query($link,$sql) or die(mysqli_error($link));

}

function setCity($userId,$newCity){
	global $link;
	$sql="UPDATE user SET city='$newCity' WHERE id='$userId'";
	mysqli_query($link,$sql) or die(mysqli_error($link));

}



?>