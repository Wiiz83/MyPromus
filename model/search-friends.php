<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Model functions to search friends and show friends suggestions*/

require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/user.class.php';
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';

//Function that return an array of Users that are friends of user's friends as a suggestion

function getFriendSuggestions($userId,$numberOfFriends){

	global $link;

	//Select the userId of the users that are friends of the user friends but aren't friends of the user

	$sql="SELECT user_id 
	FROM friend 
	WHERE id IN(SELECT id FROM friend WHERE user_id='$userId') 
	AND user_id NOT IN (SELECT user_id FROM friend WHERE id='$userId') 
	LIMIT 30";

	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	$rowsNumber=mysqli_num_rows($result);

	if($rowsNumber<$numberOfFriends){
		$numberOfFriends=$rowsNumber;	//If in the database there are less events than asked, the number of
	}	

	for($i=0;$i<$numberOfFriends;$i++){

		$friendInfo=mysqli_fetch_assoc($result);
		$friend=getUser($friendInfo['id']);
		$friends[]=$friend;

	}

	if(isset($friends)){
		return shuffle($friends); //Sort randomly the array
	}else{
		return null;		//If there is any friend return null,need to be handled 
	}

}

//Function to search a friend,return an array of users that can match with the username passed

function searchFriend($username){

	global $link;



}

?>