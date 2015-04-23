<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Index page controller,shows the login and the option to sign up*/

session_start();
if($_SESSION['auth']==true){
	header('Location: dashboard.php');	//If there is a session created redirect to the dashboard
}else{
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/login.php';
}
?>