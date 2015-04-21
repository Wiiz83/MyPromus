<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Get the user id to do sql queries easier */

require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections


function getUserId($username){
	global $link;
	$sql="SELECT id FROM user WHERE username='$username'";
	$result=mysqli_query($link,$sql) or die(mysqli_error($link));
	$result=mysqli_fetch_assoc($result);
	$id=$result['id'];
	
	return $id;
}

?>