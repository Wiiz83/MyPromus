function deleteFriend(friendId){
		var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  document.getElementByName(friendId).innerHTML = xmlhttp.responseText;
                    
                  }
                  }

                  xmlhttp.open("POST","../controller/friends.php",true);
                  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  xmlhttp.send("friendId="+friendId);
}