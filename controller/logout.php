<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Code to logout a user session */

session_start();
session_destroy();
header("Location: ../view/login.php");

?>