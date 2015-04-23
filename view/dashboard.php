<!DOCTYPE html>
<html>

        <head>
                <meta charset="utf-8">
                <title>My Promus :: Home Page</title>
                <link rel="stylesheet" href="assets/stylesheets/styles.css">
                <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500,700italic,500italic,400italic,300italic,900,900italic' rel='stylesheet' type='text/css'> 
        </head>

        <body>
                <div class="top-menu">
                        <div class="topmenu-left">
                                <h1> Home Page </h1> 
                        </div><!--

                        --><div class="topmenu-right">
             
                                <nav>
                                        <a href="#"><img src="assets/images/notifications.png"></a>

                                        <a href="#"><img src="assets/images/settings.png"></a>

                                        <a href="#"><img src="assets/images/profile.png"></a>

                                </nav>
                        </div>
                </div>

                <div class="black-bar">



                    <div class="left-menu">
                            <a href="index.html">
                                    <img src="assets/images/logo.png" alt="My Promus logo">
                            </a>

                            <nav>
                                    <ul>
                                            
                                            <li>
                                                   <a href="#"><img src="assets/images/icon-calendar.png" alt="Calendar icon">Calendar</a>
                                            </li>
                                            
                                            <li>
                                                   <a href="#"><img src="assets/images/icon-events.png" alt="Events icon">Events</a>
                                            </li>

                                            <li>
                                                    <a href="#"><img src="assets/images/icon-friends.png" alt="Friends icon">Friends</a>
                                            </li>

                                    <ul>
                      
                            </nav>

                            <div class="menubar-new">
                                <a href="#"><img src="assets/images/icon-addevent.png">Create Event</a>
       
                            </div>
                    </div>

                </div>

                <div class="grid">
                        <h3> Incoming events </h3>
                        <section class="row">
<<<<<<< HEAD

                                <?php foreach ($events as $event): ?>
                                 
                                <section class="event-box col-1-6">
                                        <h4> Event name: <?php echo $event->getName();?> <h4>
                                        <p> Date: <?php echo $event->getDate();?> </p>
                                        <p> Place: <?php echo $event->getPlace();?> </p>
                                        <p> Description: <?php echo $event->getDescription();?> </p>
                                        <a href="#"> More </a>

                                </section><!--
                                
                                -->
                            <?php endforeach ?>
=======
                                <section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        <a href="#" class="btn btn-small"> More </a>

                                </section><!--
                        
                                --><section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        <a href="#" class="btn btn-small"> More </a>

                                </section><!--

                                --><section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        <a href="#" class="btn btn-small"> More </a>

                                </section><!--

                                --><section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        <a href="#" class="btn btn-small"> More </a>

                                </section><!--

                                --><section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        <a href="#" class="btn btn-small"> More </a>

                                </section><!--
                                
                                --><section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        
                                        <a href="#" class="btn btn-small"> More </a>
>>>>>>> origin/master

                                


                        </section>

                        <h3> My events </h3>
                        <section class="row">
                                <section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        <a href="#" class="btn btn-small"> More </a>

                                </section><!--
                        
                                --><section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        <a href="#" class="btn btn-small"> More </a>

                                </section><!--

                                --><section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        <a href="#" class="btn btn-small"> More </a>

                                </section><!--

                                --><section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        <a href="#" class="btn btn-small"> More </a>

                                </section><!--

                                --><section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        <a href="#" class="btn btn-small"> More </a>

                                </section><!--
                                
                                --><section class="event-box col-1-6">
                                        <img src="assets/images/event-example.png" alt="Event image">
                                        <p> Name <p>
                                        <p> Date </p>
                                        <p> Place </p>
                                        <p> Description </p>
                                        
                                        <a href="#" class="btn btn-small"> More </a>

                                </section>


                        </section>
                </div>

        </body>

</html>
