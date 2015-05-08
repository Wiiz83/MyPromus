

                <?php include '../view/includes/header.php'; ?>
                <?php include '../view/includes/menu.php'; ?>


                <script type="text/javascript">
                //Ajax script to accept a friend request
                function acceptFriend(friendId){
                  var xmlhttp=new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById(friendId).innerHTML = xmlhttp.responseText;
                    
                  }
                  }

                  xmlhttp.open("POST","../controller/notifications.php",true);
                  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  xmlhttp.send("friendId="+friendId);

                }


                function declineFriend(friendId){
                  var xmlhttp=new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById(friendId).innerHTML = xmlhttp.responseText;
                    
                  }
                  }
                  
                  xmlhttp.open("POST","../controller/notifications.php",true);
                  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  xmlhttp.send("friendId="+friendId+"&decline=true");

                }




                   function acceptEvent(eventId){
                  var xmlhttp=new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById(eventId).innerHTML = xmlhttp.responseText;
                    
                  }
                  }

                  xmlhttp.open("POST","../controller/notifications.php",true);
                  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  xmlhttp.send("eventId="+eventId);

                }


                function declineEvent(eventId){
                  var xmlhttp=new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById(eventId).innerHTML = xmlhttp.responseText;
                    
                  }
                  }
                  
                  
                  xmlhttp.open("POST","../controller/notifications.php",true);
                  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  xmlhttp.send("eventId="+eventId+"&decline=true");

                }

                </script>


                <div class="grid">
                        <h3> Friend Notifications </h3>
                        <section class="row">
                                
                                <?php foreach($friendRequests as $friend): ?>
                                <section class="notification-box">

                                        <a href="#"><img src="<?php echo $friend->getImage();?>" id="picture" alt="Profil Image" width="100px" height="100px"></a>
                                        <p> Name: <?php echo $friend->getUsername();?> <p>
                                          

                                          
                                           
                                           <section class="answer-box"><span id="<?php echo $friend->getIdUser();?>">
                                                <button class="accept-button" onClick="acceptFriend(this.value)" value="<?php echo $friend->getIdUser();?>"></button>
                                                <button class="decline-button" onClick="declineFriend(this.value)" value="<?php echo $friend->getIdUser();?>"></button>
                                            </span>
                                            </section>

                                </section>
                                <?php endforeach ?>

                        </section>



                         <h3> Event Notifications </h3>
                        <section class="row">

                               <?php foreach($eventRequests as $event): ?>
                             <section class="notification-box">
                                        <a href="#"><img src="<?php echo $event->getImage(); ?>" id="picture" alt="Profil Image"></a>
                                        <p>Name: <?php echo $event->getName(); ?><p>
                                        <p>Place: <?php echo $event->getPlace(); ?><p>
                                        <p>Date: <?php echo $event->getDate(); ?><p>

                                           <section class="answer-box"><span id="<?php echo $event->getIdEvent();?>">
                                                <button class="accept-button" onClick="acceptEvent(this.value)" value="<?php echo $event->getIdEvent();?>"></button>
                                                <button class="decline-button" onClick="declineEvent(this.value)" value="<?php echo $event->getIdEvent();?>"></button>
                                            </span>
                                            </section>

                                </section>
                                <?php endforeach ?>
  
                        </section>
                </div>


                                </div>
        </body>

</html>
