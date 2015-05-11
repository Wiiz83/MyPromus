Instructions to do a good instalation:

1-Give permissions CHMOD 777 to the project folder in the server because if not will be impossible to upload pictures.

2-Create a database called "promus" and import the database attached

3-To login and enter to the system you need a connection to Internet and a Facebook or Spotify account because
after login with Mypromus you have to login with Spotify to use all the services that our websites gives. This services are strictly relationed with Spotify such as create a playlist for an event,add songs to a playlist or listen to a playlist.

4-This page has errors,is not full tested (even Facebook has errors!)




AND THE MOST IMPORTANT!!!!!!!!!!!!!

PLEASE DO THIS IF NOT THE APPLICATION WILL NOT WORK

You have to edit the php.ini file of the Lampp or Xampp

-You have to insert this line in the php.ini

XAMPP
curl.cainfo ="/opt/xampp/htdocs/myPromus/cacert.pem"

LAMPP
curl.cainfo ="/opt/lampp/htdocs/promus/cacert.pem"






Thanks and enjoy Mypromus