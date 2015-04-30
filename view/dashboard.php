

                <?php include '../view/includes/header.php'; ?>
                <?php include '../view/includes/menu.php'; ?>





                <div class="grid">
                        <h3> Incoming events </h3>
                        <section class="row">


                                <?php foreach ($events as $event): ?>
                                 
                                <section class="event-box col-1-6">
                                        <img src="<?php echo $event->getImage();?>" />
                                        <h4>Name: <?php echo $event->getName();?> <h4>
                                        <p>Date: <?php echo $event->getDate();?> </p>
                                        <p>Place: <?php echo $event->getPlace();?> </p>
                                        <a href="#">More</a>

                                </section><!--
                                
                                -->
                            <?php endforeach ?>
                                


                        </section>


                        <h3> My events </h3>
                        <section class="row">


                                <?php foreach ($myEvents as $event): ?>
                                 
                                <section class="event-box col-1-6">
                                        <img src="<?php echo $event->getImage();?>" />
                                        <h4>Name: <?php echo $event->getName();?> <h4>
                                        <p>Date: <?php echo $event->getDate();?> </p>
                                        <p>Place: <?php echo $event->getPlace();?> </p>
                                        <a href="#">More</a>

                                </section><!--
                                
                                -->
                                <?php endforeach ?>
                                
                

                        </section>
                </div>


                                </div>
        </body>

</html>
