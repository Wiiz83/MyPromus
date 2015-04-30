

                <?php include '../view/includes/header.php'; ?>
                <?php include '../view/includes/menu.php'; ?>


                <script type="text/javascript">
                //Ajax script to accept a friend request
                function acceptFriend(friendId){
                  var xmlhttp=new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("resultado").innerHTML = xmlhttp.responseText;
                    
                  }
                  }

                  xmlhttp.open("GET","../controller/notifications.php?friendId="+friendId,true);
                  xmlhttp.send();

                }




                </script>


                <div class="grid">
                        <h3> Friend Notifications </h3>
                        <section class="row">
                                
                                <?php foreach($friendRequests as $friend): ?>
                                <section class="notification-box">

                                        <a href="#"><img src="<?php echo $friend->getImage();?>" id="picture" alt="Profil Image" width="100px" height="100px"></a>
                                        <p> Name: <?php echo $friend->getUsername();?> <p>
                                          

                                          
                                           
                                           <section class="answer-box"><span id="resultado">
                                                <button onClick="acceptFriend(this.value)" value="<?php echo $friend->getIdUser();?>">Accept</button>
                                                <a href="#" ><img src="../view/assets/images/icon-accept.png" alt="Accept Icon"></a>
                                                 <a href="#"><img src="../view/assets/images/icon-decline.png" alt="Decline Icon"></a>
                                            </span>
                                            </section>

                                </section>
                                <?php endforeach ?>
                                   <section class="notification-box">
                                     <a href="#"><img src="assets/images/profile.png" id="picture" alt="Profil Image"></a>
                                        <p> Name <p>
                                           <section class="answer-box">
                                                <a href="#"><img src="assets/images/icon-accept.png" alt="Accept Icon"></a>
                                                 <a href="#"><img src="assets/images/icon-decline.png" alt="Decline Icon"></a>
                                            </section>

                                </section>
                                   <section class="notification-box">
                                           <a href="#"><img src="assets/images/profile.png" id="picture" alt="Profil Image"></a>
                                        <p> Name <p>
                                           <section class="answer-box">
                                                <a href="#"><img src="assets/images/icon-accept.png" alt="Accept Icon"></a>
                                                 <a href="#"><img src="assets/images/icon-decline.png" alt="Decline Icon"></a>
                                            </section>

                                </section>

  
                        </section>



                         <h3> Event Notifications </h3>
                        <section class="row">


                             <section class="notification-box">
                                        <a href="#"><img src="assets/images/profile.png" id="picture" alt="Profil Image"></a>
                                        <p> Name <p>
                                        <p> Place <p>
                                        <p> Date <p>
                                           <section class="answer-box">
                                                <a href="#"><img src="assets/images/icon-accept.png" alt="Accept Icon"></a>
                                                 <a href="#"><img src="assets/images/icon-decline.png" alt="Decline Icon"></a>
                                            </section>

                                </section>
                                   <section class="notification-box">
                                          <a href="#"><img src="assets/images/profile.png" id="picture" alt="Profil Image"></a>
                                           <p> Name <p>
                                        <p> Place <p>
                                        <p> Date <p>
                                           <section class="answer-box">
                                                <a href="#"><img src="assets/images/icon-accept.png" alt="Accept Icon"></a>
                                                 <a href="#"><img src="assets/images/icon-decline.png" alt="Decline Icon"></a>
                                            </section>

                                </section>
                                   <section class="notification-box">
                                         <a href="#"><img src="assets/images/profile.png" id="picture" alt="Profil Image"></a>
                                          <p> Name <p>
                                        <p> Place <p>
                                        <p> Date <p>
                                           <section class="answer-box">
                                                <a href="#"><img src="assets/images/icon-accept.png" alt="Accept Icon"></a>
                                                 <a href="#"><img src="assets/images/icon-decline.png" alt="Decline Icon"></a>
                                            </section>

                                </section>


  
                        </section>
                </div>


                                </div>
        </body>

</html>
