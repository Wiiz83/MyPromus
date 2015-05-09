<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller of the dashboard page */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/dashboard_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/event.class.php';
require_once  $_SERVER['DOCUMENT_ROOT'].'/myPromus/vendor/autoload.php';

//Starts session and gets username
$titlePage="Dashboard";
$userId=$_SESSION['userId'];

if(isset($_GET['code'])){
	$_SESSION['token']=$_GET['code'];

	$session = new SpotifyWebAPI\Session('730c01f53af44936a0cc51459f0cb0ea', 'e1fc633ca35141bdb6edca04632850e7', 'http://localhost/myPromus/controller/dashboard.php');
	$api = new SpotifyWebAPI\SpotifyWebAPI();

	// Request a access token using the code from Spotify
	$session->requestAccessToken($_GET['code']);
	$refreshToken = $session->getRefreshToken();

	$_SESSION['refreshToken'] = $refreshToken;
}

//Get the three next events
$events=getNearestEvents($userId,6);
$myEvents=getMyEvents($userId,6);

//code....
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/dashboard.php';
//--------------




?>