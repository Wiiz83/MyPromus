<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller of the friends page */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/friends_model.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/user.class.php';

session_start();
$userId=$_SESSION['userId'];
$friends=getFriends($userId);	//Array of Users

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/friends.php';

?>