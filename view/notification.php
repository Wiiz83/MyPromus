

                <?php include '../view/includes/header.php'; ?>
                <?php include '../view/includes/menu.php'; ?>


                <script type="text/javascript">
                //Ajax script to accept a friend request
                function acceptFriend(friendId){
                  var xmlhttp=new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    //document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    //Change the buttons,some like friend accepted
                  }
                  }

                  xmlhttp.open("GET","../controller/notifications.php?friendId="+friendId,true);
                  xmlhttp.send();

                }




                </script>


                <div class="grid">
                        <h3> Friend Notifications </h3>
                        <section class="row">
                                

                                <section class="notification-box">
                                        <a href="#"><img src="assets/images/profile.png" id="picture" alt="Profil Image"></a>
                                        <p> Name <p>
                                           <section class="answer-box">
                                                <button onClick="acceptFriend(this.value)" value="<?php echo $friend->getId();?>"></button>
                                                <a href="#" ><img src="assets/images/icon-accept.png" alt="Accept Icon"></a>
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
