<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller of the dashboard page */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/dashboard_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/event.class.php';

//Starts session and gets username
session_start();
$userLogname=$_SESSION['logname'];

//Get the three next events
$events=getNearestEvents($userLogname,3);

//TO DO, get the info of last activity of users

//code....

//--------------




?>