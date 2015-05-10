<?php
	session_start();

	require '../vendor/autoload.php';

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

	$results = $api->search($_GET['search'], 'track');
	foreach ($results->tracks->items as $track) {
			echo '<img src="'.$track->album->images[2]->url.'" alt="zob" />';
			echo $track->name; 
			echo $track->id;
?>
	
