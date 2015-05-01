    <?php include '../view/includes/header.php'; ?>
    <?php include '../view/includes/menu.php'; ?>

    <div class="grid">
        
        <!-- Pic and info of the event -->
 
        <div class="row-main">
            <aside class="col-20">
                <img class="event-pic" src="<?php echo $event->getImage();?>" alt="Event picture">

            </aside><!--

            --><section class="col-80 event-info">
                <h6> Event Information </h6>
                <span class="event-name"> <?php echo ucfirst($event->getName());?> </span>
                <p><b>Owner: </b><?php echo ucfirst($adminName);?></p>
                <p><b>Date:</b> <?php echo $event->getDate();?> TIME</p>
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
                <section>
                    <h6> Playlist </h6>
                    <ul class="scroll-list">
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

                </section>
                <br>
                <section>
                    <h6> Who is coming? </h6>

                    <ul class="scroll-list">
                        <li>
                            <a href="#">
                                <img src="assets/images/profile.png" alt="Profile pic">
                                Ronald Ayala

                            </a>

                        </li>

                        <li>
                            <a href="#">
                                <img src="assets/images/profile.png" alt="Profile pic">
                                Ronald Ayala

                            </a>

                        </li>

                        <li>
                            <a href="#">
                                <img src="assets/images/profile.png" alt="Profile pic">
                                Ronald Ayala

                            </a>

                        </li>

                        <li>
                            <a href="#">
                                <img src="assets/images/profile.png" alt="Profile pic">
                                Ronald Ayala

                            </a>

                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/images/profile.png" alt="Profile pic">
                                Ronald Ayala

                            </a>

                        </li>

                        <li>
                            <a href="#">
                                <img src="assets/images/profile.png" alt="Profile pic">
                                Ronald Ayala

                            </a>

                        </li>
                       
                    </ul>


                </section>
            </section><!--

            --><section class="col-50">
                <h6> Comments </h6>

                <div class="panel">

                    <div class="comments-panel">

                        <div class="comment">
                            <div class="comment-header">
                                <img class="icon" src="assets/images/profile.png">
                                <span>David Catalán</span>
                                <small>30/04/2014 20:00</small>
                            </div>
                            <div class="comment-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar molestie urna, mollis mattis nibh cursus vel.
                            </div>

                        </div>

                        <div class="comment">
                            <div class="comment-header">
                                <img class="icon" src="assets/images/profile.png">
                                <span>David Catalán</span>
                                <small>30/04/2014 20:00</small>
                            </div>
                            <div class="comment-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar molestie urna, mollis mattis nibh cursus vel.
                            </div>

                        </div>

                        <div class="comment">
                            <div class="comment-header">
                                <img class="icon" src="assets/images/profile.png">
                                <span>David Catalán</span>
                                <small>30/04/2014 20:00</small>
                            </div>
                            <div class="comment-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar molestie urna, mollis mattis nibh cursus vel.
                            </div>

                        </div>

                        <div class="comment">
                            <div class="comment-header">
                                <img class="icon" src="assets/images/profile.png">
                                <span>David Catalán</span>
                                <small>30/04/2014 20:00</small>
                            </div>
                            <div class="comment-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar molestie urna, mollis mattis nibh cursus vel.
                            </div>

                        </div>

                        <div class="comment">
                            <div class="comment-header">
                                <img class="icon" src="assets/images/profile.png">
                                <span>David Catalán</span>
                                <small>30/04/2014 20:00</small>
                            </div>
                            <div class="comment-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar molestie urna, mollis mattis nibh cursus vel.
                            </div>

                        </div>

                        <div class="comment">
                            <div class="comment-header">
                                <img class="icon" src="assets/images/profile.png">
                                <span>David Catalán</span>
                                <small>30/04/2014 20:00</small>
                            </div>
                            <div class="comment-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar molestie urna, mollis mattis nibh cursus vel.
                            </div>

                        </div>

                    </div>

                    <form id="comment-form">
                            <p class="formtitle">Leave a comment </p>
                            <textarea placeholder="Comment"></textarea>
                            <input class="comment-btn" type="submit" value="Leave Comment">
                    </form>
                </div>
            
            </section>

        </div>

    </div>

</body>

</html>
