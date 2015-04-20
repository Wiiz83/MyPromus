<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Signup model with functions to register a new user in the database */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections


//Register user,return true if the user is finally registered in the database and return false if there was an error with the query
function insertUser($username,$password,$email,$country,$city){
	global $link;
	$todayDate=date("Y-m-d");
	$sql="INSERT INTO user (username,password,country,city,email,dateCreation) VALUES ('$username',md5('$password'),'$country','$city','$email','$todayDate')";
	if(!mysqli_query($link,$sql)){
		return false;
	}else{
		return true;
	}
}

//Check if the username already exists, return false if the user exist and true if not exists

function checkUsername($id){
	global $link;
	$sql="SELECT username FROM User WHERE username='$id'";
	$result=mysqli_query($link,$sql);
	$num=mysqli_num_rows($result);
	if($num>0){
		return false;	//this means that the user already exists and the user have to choose another one
	}else{
		return true;
	}
}


?>