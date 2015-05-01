
    <div class="grid">
        
        <!-- Pic and info of the event -->
 
        <div class="row-main">
            <aside class="col-20">
                <img class="profile-pic" src="<?php echo $user->getImage();?>">

            </aside><!--

            --><section class="col-80 event-info">
                <h6> User Informations </h6>
                <div class="user-info">
                <span> <?php echo ucfirst($user->getUsername());?> </span>
                   <ul id="profil-info" >
                                    <li>Username: <?php echo $user->getUsername();?></li>
                                    <li>Email: <?php echo $user->getEmail();?></li>
                                    <li>City: <?php echo $user->getCity();?></li>
                                    <li>Country: <?php echo $user->getCountry();?></li>

                                </ul>
                                <br>

                    <a class="btn btn-small" href="#">Change My Profile</a>
                                <a class="btn btn-small" href="#">Delete My Account</a>
                                <a class="btn btn-small" href="#">Change My Password</a>
                    </div>

            </section>

        </div>
        
        <!-- Playlist and list of people -->

  
        <div class="row-main">
            <section class="col-50">
                <h6> Playlist </h6>
                <ul class="playlist">
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                </ul>

            </section><!--

            --><section class="col-50">
                <h6> Who is coming? </h6>

            </section>

        </div>

        <!-- Comments -->


        <div class="row-main">
            <section class="col-100">

            </section>
        </div>

    </div>

</body>

</html>