<!DOCTYPE html>
<html>

        <head>
                <meta charset="utf-8">
                <title>My Promus :: Create Event</title>
                <link rel="stylesheet" href="../view/assets/stylesheets/styles.css">
                <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500,700italic,500italic,400italic,300italic,900,900italic' rel='stylesheet' type='text/css'>
                <script src="assets/js/main.js"></script> 
        </head>

        <body onload="clearFields()">
                <div class="top-menu">
                        <div class="topmenu-left">
                                <h1> Create Event </h1> 
                        </div><!--

                        --><div class="topmenu-right">
             
                                <nav>
                                        <a href="#"><img src="../view/assets/images/notifications.png"></a>

                                        <a href="#"><img src="../view/assets/images/settings.png"></a>

                                        <a href="#"><img src="../view/assets/images/profile.png"></a>

                                </nav>
                        </div>
                </div>

                <div class="black-bar">



                    <div class="left-menu">
                            <a href="index.html">
                                    <img src="../view/assets/images/logo.png" alt="My Promus logo">
                            </a>

                            <nav>
                                    <ul>
                                            
                                            <li>
                                                   <a href="#"><img src="../view/assets/images/icon-calendar.png" alt="Calendar icon">Calendar</a>
                                            </li>
                                            
                                            <li>
                                                   <a href="#"><img src="../view/assets/images/icon-events.png" alt="Events icon">Events</a>
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
                    <h3> Event information </h3>

                    <section class="row">  
                        <div class="col-3-5">
                            <form action="" method="POST"class="create-event-form">
                                <fieldset class="info-group">
                                    
                                    <section class="col-1-2">
                                        <label>
                                            Name
                                            <input type="text" name="name" required>

                                        </label>
                                    </section><!--
                                    --><section class="col-1-2">

                                        <label>
                                            Place
                                            <input type="text" name="place" required>
                                    
                                        </label>
                                    </section>

                                    <label class=date-fields>
                                        Date <br>
                                        <input type="date" name="date" placeholder="DD/MM/YYYY" maxlength="10" required><!--
                                        --><input type="time" name="time" placeholder="HH:MM" maxlength="5" required><br>

                                    </label>

                                    

                                    <label>
                                        Picture
                                        <input type="file" name="picture">
                                    </label>    

                                    <label>
                                        Description

                                        <textarea name="description">Tell us something about your event.</textarea>


                                    </label>


                                    <label>
                                        Friends

                                        <select id="friends-list" name="friends">
                                            
                                            <?php foreach($friends as $friend): ?>
                                            <option><?php echo $friend->getUsername();?></option>
                                            <?php endforeach ?>
                                        </select>

                                        <button class="btn btn-small" onClick="inviteFriend()">Invite</button> 
                                        <button class="btn btn-small" onClick="clearFriends()">Clear</button>
                                        <p id="already-added"> </p>
                                        <br>
                                    
                                    </label>

                                    <label>
                                        Invited

                                        <textarea id="invited" name="invited" disabled></textarea>

                                    </label>

                                </fieldset> 

                                <input class="btn btn-create" type="submit" name="submit" value="Create">

                            </form>

                        </div>

                       

                    </section>

                </div>

        </body>

</html>
