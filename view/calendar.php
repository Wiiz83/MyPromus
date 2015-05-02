<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>My Promus :: Home Page</title>




    <link rel="stylesheet" href="../view/assets/stylesheets/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500,700italic,500italic,400italic,300italic,900,900italic' rel='stylesheet' type='text/css'> 
    
    <link href='../view/assets/stylesheets/fullcalendar.print.css' rel='stylesheet' media='print' />
    <link href='../view/assets/stylesheets/fullcalendar.css' rel='stylesheet'/>
    <script src='../view/assets/js/jquery.min.js'></script>
    <script src='../view/assets/js/moment.min.js'></script>
    <script src='../view/assets/js/fullcalendar.js'></script> 


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
                    start: '2015-02-01',
                    editable: false,
                    url: 'http://www.google.com'
                
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





                <?php include '../view/includes/menu.php'; ?>







            <div class="grid">
                        <section class="row">

                             <div id='calendar'></div>

                        </section>

                </div>

                
                </div>



                </body>

                </html>
