<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Model to delete an user */

require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';

function deleteUser($userId){

	global $link;
	$sql="DELETE FROM user WHERE id='$userId'";
	if(mysqli_query($link,$sql)){
		return true;
	}else{
		return false;
	}

}



?>