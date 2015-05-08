

                <?php include '../view/includes/header.php';  ?>
                <?php include '../view/includes/menu.php';  ?>


  
    <div class="grid">
        
        <!-- Pic and info of the event -->
 
        <div class="row-main">
            <aside class="col-20">
                <img class="profile-pic" src="<?php echo $user->getImage();?>">

            </aside><!--

            --><section class="col-80 event-info">
                <h6> User Informations </h6>
                <div class="user-info">
                <!-- <span> <?php echo ucfirst($user->getUsername());?> </span> -->
                   <ul id="profil-info" >
                                    <li>Username: <?php echo $user->getUsername();?></li>
                                    <li>Email: <?php echo $user->getEmail();?></li>
                                    <li>City: <?php echo $user->getCity();?></li>
                                    <li>Country: <?php echo $user->getCountry();?></li>

                                </ul>
                                <br>
                    </div>

            </section>

        </div>
        
        <!-- Playlist and list of people -->

  
        <div class="row-main">
            <section class="col-50">
                <h6> Past Events </h6>
                <ul class="playlist">

                    <?php if(isset($events)): ?>
                    <?php foreach($events as $event): ?>
                    <li>Name:<a href="../controller/event.php?eventId=<?php echo $event->getIdEvent(); ?>">  <?php echo $event->getName(); ?> </a>   Owner:<a href="../controller/profile.php?userId=<?php echo $event->getIdAdmin(); ?>">  <?php echo $event->getAdminName(); ?> </a></li>
                    <?php endforeach ?>
                    <?php endif ?>
                </ul>

            </section>

            <section class="col-50">
                <h6> Friends in Common </h6>
                <ul class="playlist">

                    <?php if(isset($friends)): ?>
                    <?php foreach($friends as $friend): ?>
                    <li>Name:<a href="../controller/profile.php?userId=<?php echo $friend->getIdUser(); ?>">  <?php echo $friend->getUsername(); ?> </a> </li>
                    <?php endforeach ?>
                    <?php endif ?>
                </ul>
            </section>

        </div>





    </div>

</body>

</html>