 <script type="text/javascript">

    $(document).ready(function() {  
      
    //set opacity to 0.4 for all the images  
    //opacity = 1 - completely opaque  
    //opacity = 0 - invisible  
      
    $('.icons img').css('opacity', 0.5);  
      
    // when hover over the selected image change the opacity to 1  
    $('.icons li').hover(  
       function(){  
          $(this).find('img').stop().fadeTo('slow', 1);  
       },  
       function(){  
          $(this).find('img').stop().fadeTo('slow', 0.5);  
       });  
      
  

    $("#notifications").click(function()
    {
        $("#notificationContainer").fadeToggle(300);
        $("#notification_count").fadeOut("slow");
        return false;
    });

    //Document Click hiding the popup 
    $(document).click(function()
    {
          $("#notificationContainer").hide();
    });

    //Popup on click
    $("#notificationContainer").click(function()
    {
          return false;
    });

    });  


</script>





<body>
    <div class="top-menu">
        <div class="topmenu-left">
            <h1> <?php echo "$titlePage";?> </h1> 
                            </div>

                            <div class="topmenu-right">

                        <nav>
                            <ul>

                                <li id="notifications_li">
                      
                                    <a id="notifications" href="#"><span id="notification_count"><p style="margin-top:-4px;">3</p></span><img src="../view/assets/images/notifications.png"></a>

                                    <div id="notificationContainer">
                                    <div id="notificationTitle">Notifications</div>
                                    <div id="notificationsBody" class="notifications">
                                    </div>
                                    <div id="notificationFooter"><a href="#">See All</a></div>
                                    </div>

                                </li>

                                <li>
                                    <a href="../controller/settings.php"><img src="../view/assets/images/settings.png"></a>
                                </li>

                                <li>
                                    <a href="../controller/profile.php"><img src="<?php echo $_SESSION['userImage']; ?>"</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="black-bar">



                    <div class="left-menu">
                        <a href="../controller/dashboard.php">
                            <img src="../view/assets/images/logo2.png" alt="My Promus logo">
                        </a>

                        <nav>
                            <ul class="icons">

                                <li>
                                 <a href="../controller/calendar.php"><img src="../view/assets/images/icon-search.png" alt="Calendar icon">Calendar</a>
                             </li>

                                <li>
                                 <a href="../controller/calendar.php"><img src="../view/assets/images/icon-calendar.png" alt="Calendar icon">Calendar</a>
                             </li>

                             <li>
                                 <a href="../controller/events.php"><img src="../view/assets/images/icon-events.png" alt="Events icon">Events</a>
                             </li>

                             <li>
                                <a href="../controller/friends.php"><img src="../view/assets/images/icon-friends.png" alt="Friends icon">Friends</a>
                            </li>

                            </ul>

                            </nav>

                            <div class="menubar-new">
                                <a href="../controller/create-event.php"><img src="../view/assets/images/icon-addevent.png">Create Event</a>

                            </div>
                        </div>

                    </div>
