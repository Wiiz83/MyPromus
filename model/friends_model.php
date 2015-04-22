<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Functions for the actions between friend */

require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/user.class.php';


//Get the friend of a user

function getFriends($userId){
	global $link;

	$sql="SELECT user.id, user.username, user.country,user.city,user.email 
	FROM friend INNER JOIN user ON friend.user_id=user.id 
	WHERE friend.id='$userId'";

	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	while($friendInfo=mysqli_fetch_assoc($result)){
		$friends=new User($friendInfo['id'],$friendInfo['username'],$friendInfo['country'],$friendInfo['city'],$friendInfo['email']);

	}

	if(isset($friends)){
		return $friends;
	}else{
		return null;		//If there is any event return null,need to be handled 
	}
}

/*TO DO a lo mejor hay que introducir y borrar el usuario en las dos columnas xk no sabemos  cuando se acepta a un amigo 
en que columna se quedara el usuario pues cada vez acepta uno

*/

function deleteFriend($userId,$friendId){
	global $link;

	$sql="DELETE FROM friend WHERE id='$userId' AND user_id='$friendId'";
	if(mysqli_query($link,$sql)){
			return true;
		}else{
			return false;  //Error deleting the friend
		}


}

function addFriend($userId,$friendId){
	global $link;

	$sql="INSERT INTO friend (id,user_id) VALUES ('$userId','$friendId')";
	if(mysqli_query($link,$sql)){
			return true;
		}else{
			return false;  //Error deleting the friend
		}
}


?>