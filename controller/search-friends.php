<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller to search a friend,if there is any search shows suggestions of friends */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/search-friends.php';


$userId=$_SESSION['userId'];
$titlePage="Search friends";
if(isset($_POST['search'])){

	$search=$_POST['search'];
	$search=preg_replace("#[^0-9a-z]#i", "", $search);
	$users=searchFriend($search); //it's an array of users,can be null
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/search-friends.php';

}else{

	$users=getFriendSuggestions($userId,20); //it's an array of user,can be null
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/search-friends.php';

}
?>