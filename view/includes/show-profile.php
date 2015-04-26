
                <div class="grid profil-container">
                       <h3> <?php echo $user->getUsername();?> </h3>
                        <section class="row">

                                <div id="profil-picture" ><a href="#"><img src="<?php echo $user->getImage();?>"></a></div>
                                <ul id="profil-info" >
                                    <li>Username: <?php echo $user->getUsername();?></li>
                                    <li>Email: <?php echo $user->getEmail();?></li>
                                    <li>City: <?php echo $user->getCity();?></li>
                                    <li>Country: <?php echo $user->getCountry();?></li>

                                </ul>


                                <a class="btn btn-small" href="#">Change My Profile</a>
                                <a class="btn btn-small" href="#">Delete My Account</a>
                                <a class="btn btn-small" href="#">Change My Password</a>

                        </section>
                </div>