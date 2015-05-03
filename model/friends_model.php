<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Functions for the actions between friend */

require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/user.class.php';


//Get the friend of a user

function getFriends($userId){
	global $link;

	$sql="SELECT user.id, user.username, user.country,user.city,user.email ,user.image_url
	FROM friend INNER JOIN user ON friend.user_id=user.id 
	WHERE friend.id='$userId'";

	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	while($friendInfo=mysqli_fetch_assoc($result)){
		$friends[]=new User($friendInfo['id'],$friendInfo['username'],$friendInfo['country'],$friendInfo['city'],$friendInfo['email'],$friendInfo['image_url']);

	}

	if(isset($friends)){
		return $friends;
	}else{
		return null;		//If there is any event return null,need to be handled 
	}
}




//Return an array of friends ID
function getFriendsId($userId){

	global $link;

	$sql="SELECT user.id
	FROM friend INNER JOIN user ON friend.user_id=user.id 
	WHERE friend.id='$userId'";

	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	while($friendInfo=mysqli_fetch_assoc($result)){
		$friendsId[]=$friendInfo['id'];

	}

	if(isset($friendsId)){
		return $friendsId;
	}else{
		return null;		//If there is any event return null,need to be handled 
	}




}







/*
Function that return an array of Users that are friends that have in common with another user
*/

function getCommonFriends($userId,$friendId){

	global $link;

	$sql="SELECT user.* FROM friend 
	INNER JOIN user ON friend.user_id=user.id 
	WHERE friend.id='$friendId' AND friend.user_id IN (SELECT user_id FROM friend WHERE id='$userId')";

	$result=mysqli_query($link,$sql);

	while($friendInfo=mysqli_fetch_assoc($result)){
		$friends[]=new User($friendInfo['id'],$friendInfo['username'],$friendInfo['country'],$friendInfo['city'],$friendInfo['email'],$friendInfo['image_url']);

	}

	if(isset($friends)){
		return $friends;
	}else{
		return null;		//If there is any event return null,need to be handled 
	}

}




/*Delete a friendship between two users,we have to delete it from the two columns

*/

function deleteFriend($userId,$friendId){
	global $link;

	$sql="DELETE FROM friend WHERE id='$userId' AND user_id='$friendId'";
	if(mysqli_query($link,$sql)){

			$sql="DELETE FROM friend WHERE id='$friendId' AND user_id='$userId'";

			if(mysqli_query($link,$sql)){

				return true;
			
			}else{

				return false;
			
			}
			
		}else{
			return false;  //Error deleting the friend
		}


}

/*
Add a relationship between two users,we have to add it in the two columns
*/

function addFriend($userId,$friendId){
	global $link;

	$sql="INSERT INTO friend (id,user_id) VALUES ('$userId','$friendId')";
	
	if(mysqli_query($link,$sql)){

			$sql="INSERT INTO friend (id,user_id) VALUES ('$friendId','$userId')";

			if(mysqli_query($link,$sql)){

				return true;
			
			}else{
			
				return false;
			
			}
			
		}else{
			
			return false;  //Error deleting the friend
		}
}


?>