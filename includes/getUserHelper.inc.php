<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Helper to get an user from an $userId */
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/user.class.php';

function getUser($userId){
	global $link;
	$sql="SELECT * FROM user WHERE id='$userId'";
	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	while($userInfo=mysqli_fetch_assoc($result)){
		$user=new User($userInfo['id'],$userInfo['username'],$userInfo['country'],$userInfo['city'],$userInfo['email'],$userInfo['image_url']);

	}

	if(isset($user)){
		return $user;
	}else{
		return null;		//If there is any event return null,need to be handled 
	}

}


function getUserImage($userId){
	global $link;

	$sql="SELECT image_url FROM user WHERE id='$userId'";
	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	while($userInfo=mysqli_fetch_assoc($result)){
		$imageURL=$userInfo['image_url'];
	}	

	return $imageURL;
}
?>