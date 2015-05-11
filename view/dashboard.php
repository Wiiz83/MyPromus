    <?php include '../view/includes/header.php'; ?>
    <?php include '../view/includes/menu.php'; ?>
        
    <script src='../view/assets/js/pgwslideshow.js'></script>
    <script type="text/javascript" src="../view/assets/js/owl.carousel.min.js"></script>
    <link href="../view/assets/stylesheets/owl.carousel.css" rel="stylesheet">
    <link href="../view/assets/stylesheets/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


      <?php
            if(isset($events)):
            foreach($events as $event):

            echo "<style type='text/css'> .pgwSlideshow::after {background: url(".$event->getImage().") no-repeat !important; }</style>";

            endforeach;
            else:

            echo "<style type='text/css'> .pgwSlideshow::after {background: url('../view/assets/images/slider-default.png') no-repeat !important; margin-left: 0px !important;} 
                .pgwSlideshow .ps-list{display: none !important;}
                #friend-bloc { height: 671px; }


                </style>";

            endif;
            
        ?> 

            <script type="text/javascript">
            $(document).ready(function() {
             
              var owl1 = $("#incoming");
             
              owl1.owlCarousel({
                  items : 5, //10 items above 1000px browser width
                  itemsDesktop : [1000,5], //5 items between 1000px and 901px
                  itemsDesktopSmall : [900,3], // betweem 900px and 601px
                  itemsTablet: [600,2], //2 items between 600 and 0
                  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
              });
             
              // Custom Navigation Events
              $(".next-inco").click(function(){
                owl1.trigger('owl.next');
              })
              $(".prev-inco").click(function(){
                owl1.trigger('owl.prev');
              })



              var owl2 = $("#created");
             
              owl2.owlCarousel({
                  items : 5, //10 items above 1000px browser width
                  itemsDesktop : [1000,5], //5 items between 1000px and 901px
                  itemsDesktopSmall : [900,3], // betweem 900px and 601px
                  itemsTablet: [600,2], //2 items between 600 and 0
                  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
              });
             
              // Custom Navigation Events
              $(".next-created").click(function(){
                owl2.trigger('owl.next');
              })
              $(".prev-created").click(function(){
                owl2.trigger('owl.prev');
              })
             

             var owl3 = $("#past");
             
              owl3.owlCarousel({
                  items : 5, //10 items above 1000px browser width
                  itemsDesktop : [1000,5], //5 items between 1000px and 901px
                  itemsDesktopSmall : [900,3], // betweem 900px and 601px
                  itemsTablet: [600,2], //2 items between 600 and 0
                  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
              });
             
              // Custom Navigation Events
              $(".next-past").click(function(){
                owl3.trigger('owl.next');
              })
              $(".prev-past").click(function(){
                owl3.trigger('owl.prev');
              })
             
             
            });

            </script>



<script type="text/javascript">
$(document).ready(function() {
    $('.pgwSlideshow').pgwSlideshow();
});
</script>
<div class="grid">
    <section class="row">
    <div id="event-bloc">
        <h6>Your Events Summary</h6>
        <ul id="event-info">
            <li id="title">
               <?php if(isset($events)): ?>

                                      <?php foreach($events as $event): ?>
            <a href="../controller/event.php?eventId=<?php echo $event->getIdEvent(); ?>">
            <p><?php echo $event->getName(); ?></p>
            </a>
            </li>
            <li id="playlist">
                <!--Must change this for the current event's playlist-->
                <iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Aqlmhuge%3Aplaylist%3A6Df19VKaShrdWrAnHinwVO&theme=white" width="300" height="380" frameborder="0" allowtransparency="true">
            </iframe>
            </li>
        </ul>
        <ul class="pgwSlideshow" >

                <li><img src="<?php echo $event->getImage(); ?>" alt="<?php echo $event->getPlace(); ?>"  data-description="<?php echo $event->getDate(),' at ',$event->getTime(); ?>"></li>
            
                <?php endforeach ?>


                <?php else: ?>



                
                       <a href="../controller/event.php">
                      <p>LET'S CREATE MY FIRST EVENT</p>
                     </a>
                    </li>
                    
                </ul>
                <ul class="pgwSlideshow" >

                <li><img src="../view/assets/images/event-example.png"></li>

                <div class="ps-list" style="display:none !important;">

                <?php endif ?>    
        </ul>
    </div>
    <div id="friend-bloc">
        <h6>Your Friends Activity</h6>
        <div id="friends-column">
            <ul>
                <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
                <p>
                    Lucas Uzan go to Yolo Party
                </p>
                </li>
                <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
                <p>
                    Lucas Uzan go to Yolo Party
                </p>
                </li>
                <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
                <p>
                    Lucas Uzan go to Yolo Party
                </p>
                </li>
                </li>
                <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
                <p>
                    Lucas Uzan go to Yolo Party
                </p>
                </li>
            </ul>
        </div>
    </div>

    <div id="tendance-bloc">
        <h6>The Popular Events</h6>
            <div id="incoming">
                                         <div class="item tendance">
                                        <a href=""><img class="event-pic" src="../view/assets/images/event-example.png" alt="Event picture"></a>
                                        <br/> <br/>
                                         <span class="event-name"> YOLO PARTY </span>
                                                 <span><i>24 People Coming<i></span>
                                                <p><b>Owner: </b>LUCAS</p>
                                                <p><b>Date:</b> 17/07/1949</p>
                                                <p><b>Place:</b> Cork </p>
                                      </div>

                                    </div>
                                     
                                    <div class="customNavigation">
                                                <span class="prev prev-inco"></span>
                                                 <span class="next next-inco"></span>

                                    </div>

    </div>
</div>
</body>
</html>