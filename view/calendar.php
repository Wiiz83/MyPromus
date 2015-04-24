<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>My Promus :: Home Page</title>

    <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../view/assets/stylesheets/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500,700italic,500italic,400italic,300italic,900,900italic' rel='stylesheet' type='text/css'> 
    <link href='../view/assets/stylesheets/fullcalendar.css' rel='stylesheet' />
    <link href='../view/assets/stylesheets/fullcalendar.print.css' rel='stylesheet' media='print' />

    <script src='../view/assets/js/moment.min.js'></script>
    <script src='../view/assets/js/jquery.min.js'></script>
    <script src='../view/assets/js/fullcalendar.min.js'></script> 


<script>

    $(document).ready(function() {
        
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '2015-02-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2015-02-01'
                },
                {
                    title: 'Long Event',
                    start: '2015-02-07',
                    end: '2015-02-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2015-02-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2015-02-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2015-02-11',
                    end: '2015-02-13'
                },
                {
                    title: 'Meeting',
                    start: '2015-02-12T10:30:00',
                    end: '2015-02-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2015-02-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2015-02-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2015-02-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2015-02-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2015-02-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2015-02-28'
                }
            ]
        });
        
    });

</script>

<style>

    body {
        margin: 40px 10px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }

</style>


</head>
  <body>
                <div class="top-menu">
                        <div class="topmenu-left">
                                <h1> Calendar Page </h1> 
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
                                                   <a href="#"><img src="assets/images/icon-calendar-active.png" alt="Calendar icon">Calendar</a>
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
                        <section class="row">

                             <div id='calendar'></div>

                        </section>

                </div>

                
                </div>



                </body>

                </html>
