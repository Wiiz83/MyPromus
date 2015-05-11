    <?php include '../view/includes/header.php'; ?>
    <?php include '../view/includes/menu.php'; ?>
    <script src="../view/assets/js/main.js"></script> 
    <script src="../view/assets/js/eventFunctions.js"></script> 

    <div class="grid">
        
        <!-- Pic and info of the event -->
 
        <div class="row-main">
            <aside class="col-20">
                <img class="event-pic" src="<?php echo $event->getImage();?>" alt="Event picture">

                <?php if($isAdmin): ?>
                <form id="comment-form" action="../controller/delete-event.php" method="POST">
                        
                             <input type="hidden" name="eventId" value="<?php echo $event->getIdEvent();?>"> 
                            <input class="comment-btn" type="submit" value="Delete">
                </form>
            <?php endif ?>

            </aside><!--

            --><section class="col-80 event-info">
                <h6> Event Information </h6>
                <span class="event-name"> <?php echo ucfirst($event->getName());?> </span>
                <p><b>Owner: </b><?php echo ucfirst($adminName);?></p>
                <p><b>Date:</b> <?php echo $event->getDate();?> <?php echo $event->getTime();?></p>
                <p><b>Place:</b> <?php echo ucfirst($event->getPlace());?> </p>

               

                <h6>Description</h6>
                <p>
                    <?php echo ucfirst($event->getDescription());?> 
                </p>
            </section>

        </div>
        
        <!-- Playlist and list of people -->

  
        <div class="row-main">
            
            <section class="col-50">
                <section class="playlist">
                    <h6> Playlist </h6>
                    <iframe src="https://embed.spotify.com/?uri=spotify:user:<?php echo $spotifyUserId ?>:playlist:<?php echo $playlistId ?>" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
                    <form onsubmit="return false">
                        <input type="text" name="search-song" id="search-song" placeholder="Search a song.">
                        <input type="hidden" name="playlistId" id="playlistId" value="<?php echo $playlistId; ?>">
                        <input type="submit" class="btn btn-small" name="submit-search" onclick="searchSong()"  value="Search">
                    </form>

                    <section class="song-result">

                        <ul class="scroll-list">
                            <div id="yeah"> 
                            
                            </div>
                            
                            
                        <ul>
                    </section>

                </section>
                <br>
                <section>
                    <h6> Who is coming? </h6>

                    <ul class="scroll-list">

                    <?php if(isset($participants)): ?>
                    <?php foreach($participants as $user): ?>
                        <li>
                            <a href="../controller/profile.php?userId=<?php echo $user->getIdUser();?>">
                                <img src="<?php echo $user->getImage();?>" alt="Profile pic">
                                <?php echo ucfirst($user->getUsername());?>

                            </a>

                        </li>
                    <?php endforeach ?>
                    <?php endif ?> 
                       
                    </ul>


                </section>
            </section><!--

            --><section class="col-50">
                <h6> Comments </h6>

                <div class="panel">

                    <div class="comments-panel">

                        <?php if(isset($comments)): ?>

                        <?php foreach($comments as $comment): ?>

                        <div class="comment">
                            <div class="comment-header">
                                <img class="icon" src="<?php echo $comment->getUserImage();?>">
                                <span><?php echo $comment->getUsername();?></span>
                                <small><?php echo $comment->getDate();?> <?php echo $comment->getTime();?></small>
                            </div>
                            <div class="comment-text">
                              <?php echo $comment->getMessage();?>  
                            </div>

                        </div>

                    <?php endforeach; ?>

                    <?php endif ?>   

                        

                    </div>

                    <form id="comment-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                            <p class="formtitle">Leave a comment </p>
                            <textarea placeholder="Comment" name="comment"></textarea>
                             <input type="hidden" name="eventId" value="<?php echo $event->getIdEvent();?>"> 
                            <input class="comment-btn" type="submit" value="Leave Comment">
                    </form>
                </div>

                <h6 style="margin-top: 5%;">Invite your friends</h6>
                <div class="panel">

                    <?php if(isset($friendsToInvite)): ?>


                    
                        <select id="friends-list" name="friend" >
                            <?php foreach($friendsToInvite as $user): ?>
                                <option value="<?php echo $user->getIdUser(); ?>" id="<?php echo $user->getIdUser(); ?>" onclick="inviteFriend(this.value)"><?php echo $user->getUsername();?></option>
                            <?php endforeach ?>
                        </select>
                        <p id="result"></p>
                        
                    <?php endif ?>
                </div>
            
            </section>

        </div>

    </div>

</body>

</html>
