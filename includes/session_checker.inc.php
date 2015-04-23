<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Starts a session and check if the user is logged,if not it redirects to the main page */
session_start();
if($_SESSION['auth']==false || !isset($_SESSION['auth'])){
	header('Location: ../view/login.php');
}


?>