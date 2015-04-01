<?php
/*Author:Ferran Rovira 	mail:ferran294@gmail.com
This code connects to the database and select the database we are going to use
*/

$link=mysqli_connect('localhost','root','');

if(!link){
	$output_error="Unable to connect to the database server";
	include 'error_output.php';
	exit();
}

if (!mysqli_set_charset($link, 'utf8'))
{
	$output = 'Unable to set database connection encoding.';
	include 'error_output.php';
	exit();
}


$db=mysqli_select_db($link,'myPromus');
if(!$db){
	$output_error="There is an error trying to select the database";
	include 'error_output.php';
	exit();
}


?>