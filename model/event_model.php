<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Model functions to create,modify or delete event*/

require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/id_parser.inc.php';
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/vendor/autoload.php';

//Create an event and insert it in the database
function createEvent($userAdmin,$name,$date,$time,$place,$description,$friends,$imageURL){

	global $link;
	$dateToday=date("Y-m-d");

	if(!isset($imageURL)){
	$imageURL=$_SERVER['DOCUMENT_ROOT'].'/myPromus/view/assets/eventImages/default.jpg';
	}


	$sql="INSERT INTO event (user_id,name,date,time,place,description,image_url)
	 VALUES ('$userAdmin','$name','$date','$time','$place','$description','$imageURL')";	

	

	if(!mysqli_query($link,$sql)){
		
		return false;
	
	}else{
		$eventId = mysqli_insert_id($link);  //get the id of the event inserted in the DB

		$sql="INSERT INTO event_friend (event_id,friend_id) VALUES ('$eventId','$userAdmin')";	//insert in the event_friend table the admin of the event as an assistant
		

		if(!mysqli_query($link,$sql)){

			return false;
		
		}else{
			//Insert the friends that are invited into the event request table
			if(is_array($friends)){
				foreach ($friends as $friend) {
					$friendId=getUserId($friend);
					$sql="INSERT INTO event_request (user_id,friend_id,event_id,date) VALUES ('$userAdmin','$friendId','$eventId','$dateToday')";
					mysqli_query($link,$sql) or die(mysqli_error($link));
				}
			}

			createPlaylist($name,$eventId);

			return $eventId;
		
		}

		
	}
}

//Delete event 		(the username argument is to see if the user have permission to delete it)
function deleteEvent($idEvent,$username){
	global $link;

	$sql="SELECT user_id FROM event WHERE user_id='$username' AND id='$idEvent'";
	$result=mysqli_query($link,$sql);
	if(mysqli_num_rows($result)==0){
		return false; //The user is not the admin and can't delete the event or the event doesn't exists
	}else{
		$sql="DELETE FROM event WHERE id='$idEvent'";
		if(mysqli_query($link,$sql)){
			return true;
		}else{
			return false;  //Error deleting the event
		}
	}
}

function checkAdmin($userId,$eventId){
	global $link;

	$sql="SELECT * FROM event WHERE id='$eventId' AND user_id='$userId'";
	$result=mysqli_query($link,$sql) or die(mysqli_error($link));
	$isAdmin=mysqli_num_rows($result);

	if($isAdmin==1){
		return true;
	}else{
		return false;
	}

}

//Function that returns an array of Users that are going to go to an event
function getParticipants($eventId){
	global $link;

	$sql="SELECT friend_id FROM event_friend WHERE event_id='$eventId'";
	$result=mysqli_query($link,$sql) or die (mysqli_error($link));

	while($userInfo=mysqli_fetch_assoc($result)){
		$user=getUser($userInfo['friend_id']);
		$friends[]=$user;
	}

	if(isset($friends)){
		return $friends;
	}else{
		return null;
	}


}


//Check if there is a playlist already created for this event
function checkPlaylist($eventId){

	global $link;
	$sql="SELECT * FROM playlist WHERE event_id='$eventId'";
	$result=mysqli_query($link,$sql);
	$exists=mysqli_num_rows($result);

	if($exists==0){
		return false;
	}else{
		return true;
	}


}

function savePlaylist($eventId, $spotify_playlist_id, $spotify_user_id){

	global $link;

	$sql="INSERT INTO playlist(event_id, spotify_playlist_id, spotify_user_id) VALUES('$eventId','$spotify_playlist_id', '$spotify_user_id')";
	mysqli_query($link,$sql) or die(mysqli_error($link));

}

function createPlaylist($partyName,$eventId){


		$session = new SpotifyWebAPI\Session('730c01f53af44936a0cc51459f0cb0ea', 'e1fc633ca35141bdb6edca04632850e7', '');
		$api = new SpotifyWebAPI\SpotifyWebAPI();

		$refreshToken = $_SESSION['refreshToken'];

		$session->setRefreshToken($refreshToken);
		$session->refreshAccessToken();

		$accessToken = $session->getAccessToken();

		// Request a access token using the code from Spotify
		$refreshToken = $session->getRefreshToken();
		$_SESSION['refreshToken'] = $refreshToken;

		// Set the new access token on the API wrapper
		$api->setAccessToken($accessToken);

		$user = $api->me();
		$userInfo = json_decode(json_encode($user), true);

		$playlist = json_decode(json_encode($api->createUserPlaylist($userInfo['id'], array('name' => $partyName.'\'s playlist', 'public' => true))), true);

	    savePlaylist($eventId, $playlist['id'], $userInfo['id']);
}

function getPossibleParticipants($userId,$eventId){

	global $link;
	$sql="SELECT * FROM friend 
	WHERE id='$userId' AND
	user_id NOT IN (SELECT friend_id FROM event_friend WHERE event_id='$eventId')";
	$result=mysqli_query($link,$sql);

	while($userInfo=mysqli_fetch_assoc($result)){
		$user=getUser($userInfo['user_id']);
		$friends[]=$user;
	}


	if(isset($friends)){
		return $friends;
	}else{
		return null;
	}
}

function getPlaylistId($eventId){
	global $link;

	$sql="SELECT * FROM playlist WHERE event_id='$eventId'";
	$result=mysqli_query($link,$sql);
	$playlistInfo=mysqli_fetch_assoc($result);

	return $playlistInfo['spotify_playlist_id'];
}

function getSpotifyUserId($eventId){
	global $link;

	$sql="SELECT * FROM playlist WHERE event_id='$eventId'";
	$result=mysqli_query($link,$sql);
	$playlistInfo=mysqli_fetch_assoc($result);

	return $playlistInfo['spotify_user_id'];
}


function searchSong($song){

	$session = new SpotifyWebAPI\Session('730c01f53af44936a0cc51459f0cb0ea', 'e1fc633ca35141bdb6edca04632850e7', '');
	$api = new SpotifyWebAPI\SpotifyWebAPI();

	$refreshToken = $_SESSION['refreshToken'];

	$session->setRefreshToken($refreshToken);
	$session->refreshAccessToken();

	$accessToken = $session->getAccessToken();

	// Request a access token using the code from Spotify
	$refreshToken = $session->getRefreshToken();
	$_SESSION['refreshToken'] = $refreshToken;

	// Set the new access token on the API wrapper
	$api->setAccessToken($accessToken);

	$results = $api->search($song, 'track');
	return json_encode($results);
}

function addSong($playlistId, $songId)
{
	$session = new SpotifyWebAPI\Session('730c01f53af44936a0cc51459f0cb0ea', 'e1fc633ca35141bdb6edca04632850e7', '');
	$api = new SpotifyWebAPI\SpotifyWebAPI();

	$refreshToken = $_SESSION['refreshToken'];

	$session->setRefreshToken($refreshToken);
	$session->refreshAccessToken();

	$accessToken = $session->getAccessToken();

	// Request a access token using the code from Spotify
	$refreshToken = $session->getRefreshToken();
	$_SESSION['refreshToken'] = $refreshToken;

	// Set the new access token on the API wrapper
	$api->setAccessToken($accessToken);

	$user = $api->me();
	$userInfo = json_decode(json_encode($user), true);

	$api->addUserPlaylistTracks($user['id'], $playlistId, array($songId));
}

function getEventPlaylistURI()
{
	$session = new SpotifyWebAPI\Session('730c01f53af44936a0cc51459f0cb0ea', 'e1fc633ca35141bdb6edca04632850e7', '');
	$api = new SpotifyWebAPI\SpotifyWebAPI();

	$refreshToken = $_SESSION['refreshToken'];

	$session->setRefreshToken($refreshToken);
	$session->refreshAccessToken();

	$accessToken = $session->getAccessToken();

	// Request a access token using the code from Spotify
	$refreshToken = $session->getRefreshToken();
	$_SESSION['refreshToken'] = $refreshToken;

	// Set the new access token on the API wrapper
	$api->setAccessToken($accessToken);

	$user = $api->me();
	$userInfo = json_decode(json_encode($user), true);

	return $userInfo['id'];
}


?>