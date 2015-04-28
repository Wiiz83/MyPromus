<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller to search a friend,if there is any search shows suggestions of friends */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/search-friends.php';


$userId=$_SESSION['userId'];

if(isset($_POST['submit'])){


}else{

	$friendSuggestions=getFriendSuggestions($userId,20);
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/search-friends.php';
}
?>