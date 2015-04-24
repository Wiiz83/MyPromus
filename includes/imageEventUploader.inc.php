<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Helper to upload images for events */

require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';

//Takes from the controller the userId


$allowed_filetypes = array('.jpg','.jpeg','.png','.gif');
$max_filesize = 10485760;
$upload_path = $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/assets/eventImages/';


$filename = $_FILES['userfile']['name'];
$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);
$imageNewName=uniqid();
$imageNewName.=$ext;


if(!in_array($ext,$allowed_filetypes))
  die('The file you attempted to upload is not allowed.');

if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)
  die('The file you attempted to upload is too large.');

if(!is_writable($upload_path))
  die('You cannot upload to the specified directory, please CHMOD it to 777.');


if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path . $imageNewName)) {

	$finalPath=$upload_path.$imageNewName;


} else {
     echo 'There was an error during the file upload.  Please try again.';
}



?>