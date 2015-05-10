
function inviteFriend(friendId){
      document.getElementById("result").innerHTML=friendId;  
      return false;         
	/*
                  var xmlhttp=new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("result").innerHTML = xmlhttp.responseText;
                    
                  }
                  }

                  xmlhttp.open("POST","../controller/event.php",true);
                  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  xmlhttp.send("friendId="+friendId);
                  */

}


function searchSong(){



		
      		
      			var song=document.getElementById("search-song").value;
      			var playlistId=document.getElementById("playlistId").value;
                
                var xmlhttp=new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                	var responseObject=JSON.parse(xmlhttp.responseText);

                	var newContent="";

                	
                	for(var i=0;i<responseObject.tracks.items.length;i++){
                		
                		newContent+='<div><li>';
                		newContent+='<img src="'+responseObject.tracks.items[i].album.images[2].url+'"/>';
                		newContent+='<span>'+responseObject.tracks.items[i].name+' -<span>';
                		newContent+='<span> '+responseObject.tracks.items[i].artists[0].name+'<span>';
                		newContent+='</div>';
                		newContent+='<button type="submit" id="buttonSong" class="btn-add" onClick="addSong(this.value)" value="'+responseObject.tracks.items[i].id +'"">Add</button>';
                		newContent+='</li>';
                	}
					
				


                  	document.getElementById("yeah").innerHTML =newContent;
                    
                  }
                  }
               	
                xmlhttp.open("POST","../controller/event.php",true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("songName="+song);
                

}

function addSong(songId){
				var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  document.getElementById("buttonSong").innerHTML = xmlhttp.responseText;
                    
                  }
                  }

                  xmlhttp.open("POST","../controller/event.php",true);
                  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  xmlhttp.send("songId="+songId);
}