<?php
/*Author:Ferran Rovira 	mail:ferran294@gmail.com
This code connects get the notifications of the user for every page to show it in the nav bar
*/

require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/requests_model.php';


$userId=$_SESSION['userId']
$friendNavigationRequests=getFriendRequests($userId);	//Array of users
$eventNavigationRequests=getEventRequests($userId);  //Associative array,the key is the username that invited you to the event and the value is an Event object

?>